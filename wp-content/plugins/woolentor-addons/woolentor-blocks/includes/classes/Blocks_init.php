<?php
namespace WooLentorBlocks;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Load general WP action hook
 */
class Blocks_init {


	/**
     * [$_instance]
     * @var null
     */
    private static $_instance = null;

    /**
     * [instance] Initializes a singleton instance
     * @return [Blocks_init]
     */
    public static function instance() {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

	/**
	 * The Constructor.
	 */
	public function __construct() {
		$this->dynamic_blocks_include();
	}

    /**
     * Load Dynamic blocks
     */
    public function dynamic_blocks_include(){
        foreach ( glob( WOOLENTOR_BLOCK_PATH . '/src/blocks/*/index.php' ) as $woolentor_block ) {
            if( file_exists( $woolentor_block ) ){
                require_once ( $woolentor_block );
            }
        }
    }

    /**
     * Block List
     */
    public static function block_list(){

        $blockList = [
            array(
                'label'  => 'Brand Logo',
                'name'   => 'woolentor/brand-logo',
                'active' => true,
            ),
            array(
                'label'  => 'Category Grid',
                'name'   => 'woolentor/category-grid',
                'active' => true,
            ),
            array(
                'label'  => 'Image Marker',
                'name'   => 'woolentor/image-marker',
                'active' => true,
            ),
            array(
                'label'  => 'Special Day Offer',
                'name'   => 'woolentor/special-day-offer',
                'active' => true,
            ),
            array(
                'label'  => 'Store Feature',
                'name'   => 'woolentor/store-feature',
                'active' => true,
            ),
            array(
                'label'  => 'Product tab',
                'name'   => 'woolentor/product-tab',
                'active' => true,
            ),
            array(
                'label'  => 'Promo Banner',
                'name'   => 'woolentor/promo-banner',
                'active' => true,
            ),
            array(
                'label'  => 'FAQ',
                'name'   => 'woolentor/faq',
                'active' => true,
            ),
            array(
                'label'  => 'Product Curvy',
                'name'   => 'woolentor/product-curvy',
                'active' => true,
            )
            
        ];
        return $blockList;
        
    }


}
