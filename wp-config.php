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
define( 'DB_NAME', 'portfolio_db' );

/** Database username */
define( 'DB_USER', 'wpsuer' );

/** Database password */
define( 'DB_PASSWORD', 'Letmein123$' );

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
define( 'AUTH_KEY',         '>5k|Fw`[R=/)?n?>-YR3:XuwfkKnpew<!Q|$H{Eh:[r*lpZOR*sPI14qe-vK:xYZ' );
define( 'SECURE_AUTH_KEY',  'G%P}p #8GDvSNA$fN@|8~[2 (Y743R0hWP_p%[eX7>#^<YK6{+^zLUKMNM_Xir9!' );
define( 'LOGGED_IN_KEY',    'mMb)v5!Vb_q2sm`rKT3.TEFG2oH=Zhi(CR-rU9snWc%K,#I+Sb,PC{Bu9&>+P9#x' );
define( 'NONCE_KEY',        'Q70kC3#kj$<nw+[brdhJsACl&RkB//i188/,!upAD`&23ijrfv1,c(ou935BZ!QO' );
define( 'AUTH_SALT',        '7~f|[|H0`Gi@UJfX?yBE!VbSkbb`xM4{T>S9R> H0OA%.j./85%B|qXeP9U.L:L9' );
define( 'SECURE_AUTH_SALT', 'I[Y++@PiOXXa }RN`%!BH(w!]AL%!V%+#DG1*TeG*gm_xq+K58=t#v>P3EI9=`tN' );
define( 'LOGGED_IN_SALT',   'T*8`e7$xHt5wpa%Fl 3u%ArC_H3Bol^QBmt&7i4DiI`I(,DHqz=5%jf)xKb5oY2c' );
define( 'NONCE_SALT',       ']PNSqn*Et*N]:[_,t3=S2Z:6^I|e`2lg,mmT.A{tc8B-8ZF ~r^Eo jt!0ONF!$9' );

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
