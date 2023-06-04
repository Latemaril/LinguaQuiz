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
define( 'DB_NAME', 'lingua_quiz' );

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
define( 'AUTH_KEY',         'wbj|a)Ekc?69ON-,uKM4/79Zr5irmVT*Y6sbo&GD8YM& ]J;)E1kj-|,{S EcqZB' );
define( 'SECURE_AUTH_KEY',  ')Oy9~QFqS2.I<@%c@f(KK(9PpJ{Bm`(.gh^R*f{Gh]>P;v/w!_b);X7qhd/`PU#o' );
define( 'LOGGED_IN_KEY',    'dV@*>|i<g7{t?aaO5MT+Z?#1#I/;7m>c[Ucq9Dh@+B<E0#s^K(9g^9C|{jDT}_]3' );
define( 'NONCE_KEY',        'JxbQ02?EO[NCa4A:d-;zf=(.$p7wsW?69m1^a@4;1A n/5 pf)i$~f3Gb{vNj+tp' );
define( 'AUTH_SALT',        '1+/5bvLSF 06$6(nk=qMexG@20vx7lZ)7+r?JOTL:IkE zgA@2C7.FM@#*;7Vk~b' );
define( 'SECURE_AUTH_SALT', 'Q^=+,kSN._~$c%ImRx$B1MM?WS`S03-Zks>:v*60@E!tVTVWT:w^iJ*6:*~L(#%i' );
define( 'LOGGED_IN_SALT',   'd8)G0Vl[$%$[dyDfduQ+DiMV6Z=lOX~_)p)g0Wu,t+R_E1DYs2Jxv>YlBgXR!F9X' );
define( 'NONCE_SALT',       'ME/E`rr|3<o@0Fwy<n*n!u;(N(L;&hFSe+3z2y6{=I=&H?L[V;pGmC7~Ts0gSf1@' );

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
