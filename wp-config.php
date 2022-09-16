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
define( 'AUTH_KEY',         'jJDQ)OgUTLjFvZkfhsL$:I/hiwh)D.ncv&M9J`,P}gpg5k`J8Lj~!@,y<w%p1cD+' );
define( 'SECURE_AUTH_KEY',  'A@fL$=*:G.eBTDe!cl#-$iff[kbD!]Nn.91juT&=.);30Kj*yUj$n]/Dem?H$.h)' );
define( 'LOGGED_IN_KEY',    '&mcO>cc]`s,z*M;!&gEzj8#Wf:i|a-bAXJlZsA$yrpSYs4iI/;%4)-joy4~xlNV}' );
define( 'NONCE_KEY',        'i;A(w9TO*?Oeb7[.#tgsX&f}I)uETZo~BzkUf*UH`%[3u)~S@!ZLi+wQw%L?#}dz' );
define( 'AUTH_SALT',        'B`@JZ>8HWv6gyAxdm/ginASx=pj}9V$CMB6//wfRmxh7I~vS$D@Zx?D)}qYkIH)*' );
define( 'SECURE_AUTH_SALT', '1XN;I}@b%<P~<TFIH;j-A8P.2,x i@!Bau2)FH7p?jzJV[]Ms7uSPHh0jr^0^q~R' );
define( 'LOGGED_IN_SALT',   'xb$FQX)05xX3SL=2wPg.Ecws0a%a@rO^y3>onUJ@606~~Nt||2YrEJS8;_5#66[e' );
define( 'NONCE_SALT',       ']>U#Kl`x5is.*bKT5BfD9#;<nQ-Ai)6]M:x4n,JX9AVW5Yh7Bu(=|f$^U>qbq+TG' );

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
