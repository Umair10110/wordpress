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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         'L/[e1NiIkN,(F(iulLZ<J|&<}Kfx/;TmTJdnd%2.5Pqedfn-we$jp[ Q0bbxBZSW' );
define( 'SECURE_AUTH_KEY',  'Ncw/00HY<_{zQUTIgsJr3CMQjW+r{N%B0M<&$}h1)#Y.S;h,:%;z[k-C bxJONx#' );
define( 'LOGGED_IN_KEY',    'RM=BE/!=k]m+d1Gtk(dSHpv0`$F|Jdla2SYwu(K;o)uOVY1X|zb>D4wPjbj%kU([' );
define( 'NONCE_KEY',        '#8QhufAR*SJBpr%A*$3T<mUZtj+?y&9fuE,*A=h0<Fn~{|G%OHOm+tRyG4;{sLT*' );
define( 'AUTH_SALT',        '/cj`MgIwq3-yQ@3;&Ap2/7#(?<$H&1>Z]`3)1@/Q?&!sv$8<w-FS.d6V?ntV/Q6h' );
define( 'SECURE_AUTH_SALT', '6<|*97Kz=h;q@K]-r(;lS}+=o1s.46[fe][kN~4tiufbD(BFUM(WD`QD*VSsPtaS' );
define( 'LOGGED_IN_SALT',   '?%W+n+UfL6a0c[B#+ u<uSxb 2*QHD:m8sOs!6?tgA/:!H6cP@R~kBnMEMDFtI[J' );
define( 'NONCE_SALT',       '-~;E5HiQ-P<mb,=bw2XkJ#UK<{1{_wHs]JR0}|H.u]^ pWypl#d1:JZDW*zF?! >' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
