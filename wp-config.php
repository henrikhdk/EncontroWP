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
define( 'DB_NAME', 'u201515744_NewEncontro' );

/** Database username */
define( 'DB_USER', 'u201515744_geral' );

/** Database password */
define( 'DB_PASSWORD', 'zxm7ewn6dtm*YNG*dqm' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
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
define( 'AUTH_KEY',          'n8~;=!i3)$3=m#f+UV@szELDV!oo8<i=LRD+Q+ouFoib,h#[bYr^Wov1_<&RTvuV' );
define( 'SECURE_AUTH_KEY',   'ayq3&4a>#,OTlvvRkB @u>KQ=bG]8n:UEO]j?1,0Ejdlzc 2LB!DA{@Da}NuFoRD' );
define( 'LOGGED_IN_KEY',     '`[1o.#HSl]=YxQo*!/2tWXuVwTBEXl6dr=4f4<=`,aazn_WQfpC[;OT~!&wvIRBg' );
define( 'NONCE_KEY',         '?YinbrC}gymQJ:kGr<hq$JrWC8IYI(1KuhI#o-SCYC<`Gznlqo%xag}W%*TSMEZc' );
define( 'AUTH_SALT',         'ONO=W?o1[T%5L:-`2FtsCItm$XV4%=0X&a~A9(]8/[CgWLyd_m+{cP*z +F%LZSQ' );
define( 'SECURE_AUTH_SALT',  'V6d6x~@H<1<I^abusyabAG_v^!9iE&?qZx`DRe[f>f,ztk_<l811`XbOFZo(.VcV' );
define( 'LOGGED_IN_SALT',    'fF4$OC[va3i_q |:hT/?(2E(yz=w{N[x2|_[qGkX2dNeiNeeg*v2~0w![_Vqd]F#' );
define( 'NONCE_SALT',        '%1k0EPk}oZ{Np@-,~&e!Vhd;$zVAkpa6~7;J1Zimi?kGDdNzq&zQiUtteb@043vU' );
define( 'WP_CACHE_KEY_SALT', 'Z1V-N1n]o5vOQ]#c0f0`UBs{5/|8Hb25lCe@874md|&Ek2QxSW/%*r&u|/z5o:ks' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

@ini_set('max_execution_time' , '300' );