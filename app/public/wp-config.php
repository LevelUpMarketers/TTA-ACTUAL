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
define( 'AUTH_KEY',          'vrmBC{ho+CCMg)r3 y8Go-@VZ>/)DQU-YMf^rb9mJs% #fMiyU#E3,yW(8M5c?`g' );
define( 'SECURE_AUTH_KEY',   'BdNV8bg %LvvuOmDW)h&,x%.UOf7?L:G^s#RTjEQ/5&VE`qH/gx5kP#,s^}a(fwb' );
define( 'LOGGED_IN_KEY',     '``RB9L>={;i53CaERJA|}&,Ts4`^W$u{te:#D._y,W:w)D$^cAA92~!Dn.Xk@Bgz' );
define( 'NONCE_KEY',         'E%+t|Htl5|ejK&l<G2j`;/-uilN2}H2+ ,4GHjkeM_[ Odl@HgT5v8YY}8{J`f8G' );
define( 'AUTH_SALT',         'p,-OU}WBPS5xVh6sxMXT2o2^[?7Bz!fXa+Td4j_pIwu|!iN,1C/^*LgY>a18,<%;' );
define( 'SECURE_AUTH_SALT',  '|}w-i:Nw&t*rSW1_GUVtFw![rt{Z1oa**!1x ;g}r -JBg*0|+AymeYT,fox@lj&' );
define( 'LOGGED_IN_SALT',    '|}D%Et/^6ZF&,Be}`m3NG7(RTz0Nt%Vu=au1n| ~Y8Lm?.D.| qTUoM%~BI@}J={' );
define( 'NONCE_SALT',        '=aT{M$rsFmW+[&;GZu_:%Qen1>iE#2Z,ByHT!*+g3uG*~t&{AMywnnh!<(enCqfR' );
define( 'WP_CACHE_KEY_SALT', 'xZX+A?@|0Vru|m07PAn/=XZ-iSkX~eLnl1i(MU -x+uq3bGv6p!j g9V$NYj-M@g' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_j9bzlz98u3_';


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
