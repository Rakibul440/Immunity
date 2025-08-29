<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u550171843_rJnkg' );

/** Database username */
define( 'DB_USER', 'u550171843_a92ZP' );

/** Database password */
define( 'DB_PASSWORD', '8s4q9djLys' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'gRzPi?&*9m1CHoEibUK>!H{CPjPt[gc&H01`s,K0^M5p=^3Gg(4tHDwp6+OD(GYG' );
define( 'SECURE_AUTH_KEY',   'V~RDPb5+/e-G1OPS5@*{i-uEnF 8z[`gwIpY;1-Jum#v0RU<K$P:4n[MLr=!kipx' );
define( 'LOGGED_IN_KEY',     '#JtgRF:ll^E-|uJG-;?^w&6RLR^=][0;OxE*2ic$xI`~;5S]ktz4;yxH^Nh5&.p(' );
define( 'NONCE_KEY',         'd9#]:[88<~Lh`iWd:n|1kmVu49@MuRId?*7i{Fxni}k{lKt!19`}TQ!oRjQI]H-^' );
define( 'AUTH_SALT',         '&w7yGrM}[_r#*.4dm=C7Db<{JkUy/OFIU&]`qhg_EWu.(f9-iKO/A}>[UMHd{e!l' );
define( 'SECURE_AUTH_SALT',  'I_ARkJC )xD>YMZqpgob?M|JyKAq)ld[ty(=SF_F|{-l{4!o8<9>7R(G5(bjk,c)' );
define( 'LOGGED_IN_SALT',    'f<eTEdZogYpaMD*K85EWV5`4T~@Z[r8v}M+zH2;{UgVDyE*yaFWV5(q%7]}Wv?R9' );
define( 'NONCE_SALT',        'Wmgal%RISo$Oj>*`M+ep*aXE<fgbIgl<8PaHO[o]i+H18IG(/TrS3f kG21TNy;9' );
define( 'WP_CACHE_KEY_SALT', 'U 4*LDNcy_l@]`sF1L6Z$/B$40%A!/48m;1Cl0`$,:2Tbp59l}:4^H34@m`/:,*|' );


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

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
