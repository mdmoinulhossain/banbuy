<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'banbuy' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%,*F;lBDaWx<FKMhvI%8Re5*SxVLaVkwh>(_Isex2SXgC]0*WAU%Z~LF?74u,& f' );
define( 'SECURE_AUTH_KEY',  '}@Mif]1tC-97xImMaM7p=emqEB$D ln}okw=e8Z`RT?z<unU,1{3,eSHz.OMsu{0' );
define( 'LOGGED_IN_KEY',    ' =p80Zt74}bykifZ)O4YYaiQ/IW@I(uHK^|kAmZ6@_h@gPkUp%mHzt9@c8;(IqN4' );
define( 'NONCE_KEY',        'T@;J`z.L/sI)p}sVm,o6gXtJ-{0@f!]n_Q aP|C2`Zx7099H.6!j8pf]?plYhY)%' );
define( 'AUTH_SALT',        'H);h(HY%9 <PM8rqZ>^(.gZlQLOF-lg[ <}vJ:TbJ%<Ccu7XCfom:5~e,VV rLw<' );
define( 'SECURE_AUTH_SALT', '4[ oKocnhRp^4j]wJiF%05Z#^{YCkwQ mK/> #_efhF.A9+WnuJc;#nzk*vzN|on' );
define( 'LOGGED_IN_SALT',   'A%j){6RaQ9&eUy-_f6I|(9jV.},F71l3wZzA5@uWy;l1Nww`gLk}`z`isH/M00bT' );
define( 'NONCE_SALT',       'teQ^[]z;agiHGw!q2JWmXAz $=3DwG[I]_K0zFguzvAUZTOtF,c-y&U`y`?nKQGa' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bb_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
