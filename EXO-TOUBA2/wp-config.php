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
define( 'DB_NAME', 'exo-touba' );

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
define( 'AUTH_KEY',         'wtN6EB8XgO4`&3@++]alegz@g)yAu-wdx>Xp8XDT?p[v?v_^Lv]@20H-_3*h(|o#' );
define( 'SECURE_AUTH_KEY',  '>^8MYxRNJx&{Mpg0vvGOnQkt08V[^V]#r@@yyE#f;!Q8bzwrF +d#EAO.<nA:u*f' );
define( 'LOGGED_IN_KEY',    'i|H/Ff{#.^yuOwaC]!2H6?lZD.>og$ger]C Q$Q-b_Sj<Ou}WQmr#sLi/7)>0^0m' );
define( 'NONCE_KEY',        '~YW?kWI^DBSgSlK&tix8GDLx*0|pZF3q<xZ1. =k%(V),J<+gCR+{]XLaa&MMOaR' );
define( 'AUTH_SALT',        '_OD6#)pfQj/[Hj%S>3I6beFERnGajN(o$~ii~hUOFmqt9xWCY]V!1qt]c1DIcgG2' );
define( 'SECURE_AUTH_SALT', '/xi}Pt;`pW>L/#Y}h{,|trh#.cTWdVJ.HmPjCnI2)x]g!LSf*4dwRx<n{=fCaIoG' );
define( 'LOGGED_IN_SALT',   '4<>S:pY_H8StQw7az8JK8_+`27>SSixlWx#>sz9$)}j>gFZ{#UVUp$w@H0|n)yt:' );
define( 'NONCE_SALT',       '>eK<y6{u.X?dl-j7C&tly^cmrh1lI+b5`+k][oMl)9!UT/QmnrAcgg*PlYYwD9e3' );

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
