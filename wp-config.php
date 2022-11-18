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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myFiles' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '>d/Fe<R<~HOR25M[HQAD5gv[0^`Fz[oD@PQ8a8W:l {IsfZwk-y$MO_j$4]7:~3D' );
define( 'SECURE_AUTH_KEY',  's5>gy_g.tdp^N[}5~~L(r>]}MKAW[5V??,A+e`oF74Me}o#ID?_MP&1vx1n%K_=S' );
define( 'LOGGED_IN_KEY',    'q.YrlJ+zT!3j+J3*42UG0QuryM{CU=aNy Qy?(2u|6d4XOhIA-v>L]nP=0x9gr1q' );
define( 'NONCE_KEY',        '2m-*wEl+-[%EO*cIE:gjLm--c<o7kv!#c!ei:gz?,ptF1;*q!eSypn%0vf^SKJ@I' );
define( 'AUTH_SALT',        'sg6[1Z7cC3to|K]_Cj~3S|G{h*#}_CjD_<JY1B85qh&.(A0(0BQvO%<hy`L.CF|L' );
define( 'SECURE_AUTH_SALT', ';tqmU~jD:hkLfmG.31q{{s5tzMfg&nz(,e6%,|pBx,=t464m=AKN5Ks%}We9$~B{' );
define( 'LOGGED_IN_SALT',   'r7O,]U,wvD3(j-Q5ZJM,9W.ocXJG?Y}hYl#@1?xkOaVPq1Q%J1QHSs<`)om3KP%W' );
define( 'NONCE_SALT',       'Ak1p(V^];Dtk/wEM%/AtB(+Xp!,10}&bz>|rO3*XY^:lDepx*wMq<h:kg% >nKFK' );

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
