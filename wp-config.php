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
define( 'DB_NAME', 'AgenceLaMadeiraBD' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'ouNa;{4GFTKvQIgzK_lA{;H?)Be8:Mo]OzNH#L%$n,tj7*BB!BK#R9%^wDaOry-c' );
define( 'SECURE_AUTH_KEY',  'nNi|^%s[r>*uDjdWT$bmIU_Xo*n!#yO/<]]8:D`~29*/Rq8cgqqg /Twzt/HFp|N' );
define( 'LOGGED_IN_KEY',    'cQ).F3q``@*L421a|TuG%;@OFEUN+j2vjNjo%kc/Eyy`ol%Q3)Nj9Cjvq;WHR4Ii' );
define( 'NONCE_KEY',        '>~l,*i0!/@6]Ps`ux5bZOfB,cbI|@#u=.lz3wW&]cQ-:/J63v`/5s(]6sdjK79;h' );
define( 'AUTH_SALT',        '3gHjDyWc*S@]u2xxV~sZ]W0Y!39:Q[!#(vntD;u&^MOv#EWo5 :x9LCnTo|s;hT=' );
define( 'SECURE_AUTH_SALT', '!cV564k*MaVL8_RDt)[Q @zNt`12PpbVi7L] ysDhY.(|]Z>dMm&A|2+on2-~/EM' );
define( 'LOGGED_IN_SALT',   '3!Sm~R,Tr0/S_gM.[yP%U3rq<(}`b-5WU|05r~B(kOO$|FAqFzgvNT}T^x/KVq34' );
define( 'NONCE_SALT',       'GdxdfPp=>Yx80;K?{:OyEt-wbn<,(a7,-6P4p)SUSq.N)3Qus;sj*AV2H!79E>~6' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
