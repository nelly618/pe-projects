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
define( 'DB_NAME', 'anime_data' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'jc^EQjH(7|N5bO+g{$y-F2QqhY#]Kgnx}yT`1?-+%3~k0&wG$C72*_qS|%7PK0J{' );
define( 'SECURE_AUTH_KEY',  'M|)`=G4)W-m3Rj|86X5 [XL#<51_L_9kWC9irs-BO*d=}V/gVbM`OG(Y]0fBrhhP' );
define( 'LOGGED_IN_KEY',    'El(&8nU[^#/!/_6VG-X~H$m+X?J,//U}7Nm;%IWWr]mY{x1->YWlrJH)Iu^Gyy|-' );
define( 'NONCE_KEY',        '{FW`>78V&Ku_<N+zxh>%>Zjh,j0Rsqs=&5~ZI1A|~J8$*PzUIY|=eT*2kXZ*D4Vd' );
define( 'AUTH_SALT',        '0M-n13}umdx;?q)>s@ivvWsTD/*T*Ys*/okH$55caSv4$m1vGvx{-WOm-(-W$;mo' );
define( 'SECURE_AUTH_SALT', 'E*m_|wvMeg!1@pi_N~n6#0/NlP*E+v7kX;U|0cRc>K/+56L0Ki&ovE4NrK~LIYJR' );
define( 'LOGGED_IN_SALT',   'Z<? <s)@>:bIZLl)2DDGJ3H;>PP Y{]cBX* mzjmJQsm]=I=VgIB`p5)fXc5b^d[' );
define( 'NONCE_SALT',       '1@3)[g&}[+]R6#U|&~Ewnv.vq:n?_`G_~iwLkt}?fEgRzI8>d3-bX,B8Mm|FzHQL' );

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
