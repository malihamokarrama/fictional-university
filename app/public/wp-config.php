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
define( 'AUTH_KEY',          '|sWCZ+fW*S)NjBEn&Cjjh,gzQ*n6J)>O*dM9+c1nu4z1VW2KW<t+ipY,>Khz}PK.' );
define( 'SECURE_AUTH_KEY',   '+i9PIjlo?El7s76_QNk^yIUJ!|,K)P4}dwPAER2Sfz&s1[{U;`<mMx&;qN@=5 )B' );
define( 'LOGGED_IN_KEY',     'ZVf:MnW9|9=:Zd0x3I$l;-ZT1,aZ?D=p~kFz.[dXE.O`.EwVS;F~,:X0sXW<,dP-' );
define( 'NONCE_KEY',         'T3dk Q=b0gm]b$5O5Qv ;b(|y[8@2d83aC F&:x9{WEb1ANpOurCk7yqX;Y#)7Ng' );
define( 'AUTH_SALT',         ';0s>nPUz9n8xa%>X!BJx(!YZ@Rtv)O%Xk{JTLmw4DV3sgU{.Z9g5/ng8wcSb`2sx' );
define( 'SECURE_AUTH_SALT',  'jukl|59k0h>rpIbP2obh zI8(=[M/~S]2@0LzN@H$gQ(qhMfYi*DE:_1}_}#HI<r' );
define( 'LOGGED_IN_SALT',    'tC;32HBn~R}{Gx^gY(dpM}_-jjxQhEU~Q4v#V&-kKVUa,_f-ESPo29RB+h9@aT{K' );
define( 'NONCE_SALT',        '<7$-2l)vS&:I@x2{U!9!S4E]Po%pLR5/fWCQ~b[6Zy)Mm@eHUtJak9+^2LS/1oEe' );
define( 'WP_CACHE_KEY_SALT', 'a5]RxF^d)F4f4+ ?1 }%^G@(ZfZC}H{XT---{*t:if}4uQl_<4jv~RLC[eOpERkP' );


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
