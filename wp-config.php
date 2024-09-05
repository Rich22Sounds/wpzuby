<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'KWA8=+;+TPh8XLYA*Tg=sKt,&k=)-c8wN0g:WDK48;GsSmGIy(+epJ-(Qi9k~yjY' );
define( 'SECURE_AUTH_KEY',   '_9Xex2F*8m&8rv$5hE#wXG,#XVOno}/C}MYvz]<v k:LHXOH=QN9V5T%>TC0+J|^' );
define( 'LOGGED_IN_KEY',     'o[WlgEI=1Mg#}+7:FQ[hn*P~tKpJ:;MmMvVnB5YVD<MfaHGuQ?1~2(FmMD+[j:/#' );
define( 'NONCE_KEY',         '|KDRrm5<t3U^V7<=;Jo.qZE@8?7Db teBVAxF/KkJ{ehz.lM3DBwA0n83kD1gQ1P' );
define( 'AUTH_SALT',         'l1&7W{8HsbaVS#6Kws]/;7g^E}7?Wwh 3!>phz~hv&?C:u3/W+V~zaGY~YjZ6.Xw' );
define( 'SECURE_AUTH_SALT',  'VxQXE;bWsFR&OG]I!dVNO8:9#kgQ/,B!pFr>^hG~7)Em%8g&xmz2GIuFCs3Dk9>K' );
define( 'LOGGED_IN_SALT',    '?+ZQB[x1_pKC%hG0OW8i)1d=[.x!|1z2*VV>Xv/M2)8MyDGl?);Q:sWoa@ciqE6e' );
define( 'NONCE_SALT',        'Z=cJ&hLUW#iUTUm.%L 8PZA@n[:/ %T<zY9n8${CF$T9ax8rY~Y/lWtbLl^yuR~U' );
define( 'WP_CACHE_KEY_SALT', '_XxhsX~wz~`AJ<#b5!%4o1UJTHb{>.}sG}L5IyBi?n~V9^%q[_*`FdFscAdL{.PA' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
