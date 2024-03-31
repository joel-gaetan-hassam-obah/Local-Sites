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
define( 'AUTH_KEY',          'u<J)S_.=*78ZL&B]Pf{{)J1f9IU;t|rm`DT[R 57yBN`IB}[ohd/T1kg]?mGcfxj' );
define( 'SECURE_AUTH_KEY',   'JiM0GoE|LCsSd>Ul,r;tj;JEl(NlUo^9WWZ%rP!u3)8+ZWP7pY.LV-!%E-{l#bN{' );
define( 'LOGGED_IN_KEY',     '%!jE_QczB+Z,ZKC` WrB,o1UW_`W>F9h62/m[ gM}Qe(+m-jpsqd=qZ:EQzDUm7F' );
define( 'NONCE_KEY',         'yfak5DJQr1XHnd[%}#W82<}^Ab@!Aiu{x4=Jy0&9GSkFEmd[l[&HxivGAAV^iwQq' );
define( 'AUTH_SALT',         '8m0Fqr8>2]p58wgin-p.qf*UVc,Mu#Ds/h;rb&q0Oq<OkQzm@)N:NNUf{#x1L>ZV' );
define( 'SECURE_AUTH_SALT',  '|u%zn[I#!M`b8w{rTgl8yQl2fkb`v&^z8xvD_*Gm<cn.|!Db.lh_ZB]|dci8,]BG' );
define( 'LOGGED_IN_SALT',    'qXsZJ7jv@MB`Dk~5}>SZyauv eN>Z/{T2l)|TRtv)Efi#U{Gb|}pa6}N/,UhIz`P' );
define( 'NONCE_SALT',        'x L*]G=B3(hnhrRWdUYVXtDLkbPwi&5L%qyYe94fm2k&!~SDh.+gJ=kZyN.-N25S' );
define( 'WP_CACHE_KEY_SALT', '|,/V#IIu`%=mU7AcKH6Q/1IXS~*L8T#y-9.]5MVK<8B@j,8*}~&2+%){JmoV[bv1' );


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
