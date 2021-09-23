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
define( 'DB_NAME', 'new-site' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'p9lP_K/H5cV:8m#8e)D<u</%j#s7LA.Li=411nHvldK7ZUK=m{a 8z:*&e6Rh]Ck' );
define( 'SECURE_AUTH_KEY',   'e) 0jKVxic!SWhfSAf<By)P6}$}O}cEqoFGpT+^xrXoWG;$:uP{7<SK]s5*np$i-' );
define( 'LOGGED_IN_KEY',     'Lbzx~uF0.W*#~0x@cBra!2dL<uX5@(rV_K+^8L+,&Zt`-!<^`$e9~Bs9B3Ktg?mH' );
define( 'NONCE_KEY',         '&Uf(#AAoWV]&nOae*.lU.#*-WwFuh]nr2ItkXO>ktO}qR.YjU:r/c(9Ca6Ik#!Du' );
define( 'AUTH_SALT',         'Dx?CFaWoHY=xEp/frGy<mhJE0xwX+HX]W?bv@Mh|p0 iyHm-t3*Z~OUi73pHFYi ' );
define( 'SECURE_AUTH_SALT',  '#w(cm{Sl]VUz`G&g^6R@j4HeT$& IIaolWj;48^@3*4kE=i0a&:S7`C6~4`!b)`I' );
define( 'LOGGED_IN_SALT',    'SFu?oQ%:.`-gH48;Fxcd!}X&%A>s(@h_zd$=D_Hq SVv[fs&4^WfeTwR%B5.M.5{' );
define( 'NONCE_SALT',        '+e[nftG#bGsBEE9e*<]>@-TFdDDb}AV2p985yWz<*%{w~~bJzWief?|)fye[Z:VP' );
define( 'WP_CACHE_KEY_SALT', '|ha)W`x|p;Ia_+eM{zV<?H-F./1mj{%[z/.gw=u#`@sV.K3-(m[WRz[EGs/xYx?j' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'SCRIPT_DEBUG', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
