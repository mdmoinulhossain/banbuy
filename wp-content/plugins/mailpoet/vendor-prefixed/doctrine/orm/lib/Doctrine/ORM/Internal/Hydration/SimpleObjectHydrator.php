<?php
 namespace MailPoetVendor\Doctrine\ORM\Internal\Hydration; if (!defined('ABSPATH')) exit; use MailPoetVendor\Doctrine\ORM\Mapping\ClassMetadata; use MailPoetVendor\Doctrine\ORM\Query; use Exception; use PDO; use RuntimeException; use function array_keys; use function array_search; use function count; use function in_array; use function key; use function reset; use function sprintf; class SimpleObjectHydrator extends \MailPoetVendor\Doctrine\ORM\Internal\Hydration\AbstractHydrator { private $class; protected function prepare() { if (\count($this->_rsm->aliasMap) !== 1) { throw new \RuntimeException('Cannot use SimpleObjectHydrator with a ResultSetMapping that contains more than one object result.'); } if ($this->_rsm->scalarMappings) { throw new \RuntimeException('Cannot use SimpleObjectHydrator with a ResultSetMapping that contains scalar mappings.'); } $this->class = $this->getClassMetadata(\reset($this->_rsm->aliasMap)); } protected function cleanup() { parent::cleanup(); $this->_uow->triggerEagerLoads(); $this->_uow->hydrationComplete(); } protected function hydrateAllData() { $result = []; while ($row = $this->_stmt->fetch(\PDO::FETCH_ASSOC)) { $this->hydrateRowData($row, $result); } $this->_em->getUnitOfWork()->triggerEagerLoads(); return $result; } protected function hydrateRowData(array $row, array &$result) { $entityName = $this->class->name; $data = []; $discrColumnValue = null; if ($this->class->inheritanceType !== \MailPoetVendor\Doctrine\ORM\Mapping\ClassMetadata::INHERITANCE_TYPE_NONE) { $discrColumnName = $this->_platform->getSQLResultCasing($this->class->discriminatorColumn['name']); $metaMappingDiscrColumnName = \array_search($discrColumnName, $this->_rsm->metaMappings); if ($metaMappingDiscrColumnName) { $discrColumnName = $metaMappingDiscrColumnName; } if (!isset($row[$discrColumnName])) { throw \MailPoetVendor\Doctrine\ORM\Internal\Hydration\HydrationException::missingDiscriminatorColumn($entityName, $discrColumnName, \key($this->_rsm->aliasMap)); } if ($row[$discrColumnName] === '') { throw \MailPoetVendor\Doctrine\ORM\Internal\Hydration\HydrationException::emptyDiscriminatorValue(\key($this->_rsm->aliasMap)); } $discrMap = $this->class->discriminatorMap; if (!isset($discrMap[$row[$discrColumnName]])) { throw \MailPoetVendor\Doctrine\ORM\Internal\Hydration\HydrationException::invalidDiscriminatorValue($row[$discrColumnName], \array_keys($discrMap)); } $entityName = $discrMap[$row[$discrColumnName]]; $discrColumnValue = $row[$discrColumnName]; unset($row[$discrColumnName]); } foreach ($row as $column => $value) { if (isset($this->_rsm->relationMap[$column])) { throw new \Exception(\sprintf('Unable to retrieve association information for column "%s"', $column)); } $cacheKeyInfo = $this->hydrateColumnInfo($column); if (!$cacheKeyInfo) { continue; } if (isset($cacheKeyInfo['discriminatorValues']) && !\in_array((string) $discrColumnValue, $cacheKeyInfo['discriminatorValues'], \true)) { continue; } $valueIsNull = $value === null; if (isset($cacheKeyInfo['type'])) { $type = $cacheKeyInfo['type']; $value = $type->convertToPHPValue($value, $this->_platform); } $fieldName = $cacheKeyInfo['fieldName']; if (!isset($data[$fieldName]) || !$valueIsNull) { $data[$fieldName] = $value; } } if (isset($this->_hints[\MailPoetVendor\Doctrine\ORM\Query::HINT_REFRESH_ENTITY])) { $this->registerManaged($this->class, $this->_hints[\MailPoetVendor\Doctrine\ORM\Query::HINT_REFRESH_ENTITY], $data); } $uow = $this->_em->getUnitOfWork(); $entity = $uow->createEntity($entityName, $data, $this->_hints); $result[] = $entity; if (isset($this->_hints[\MailPoetVendor\Doctrine\ORM\Query::HINT_INTERNAL_ITERATION]) && $this->_hints[\MailPoetVendor\Doctrine\ORM\Query::HINT_INTERNAL_ITERATION]) { $this->_uow->hydrationComplete(); } } } 