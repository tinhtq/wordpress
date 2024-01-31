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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'w3A@nMVWu^zE73u/Hqdn~d1E B]M!]`|9Tr97;b1q?d|s,`(UnaL8Xms5AFy_`a)' );
define( 'SECURE_AUTH_KEY',  '5&iD$b/9.m~2U_x_gaU?=xOYChWVDWiK[W)q$zSAtN@Q)?m]`^dNpWq xtz`BL<=' );
define( 'LOGGED_IN_KEY',    ';(I[JYi^HqSK~D@5pYV;(@/Y1V_l*QG^mK/:+#0&+iAnof.d%B@%:$_i`V~^6U;}' );
define( 'NONCE_KEY',        ']0{pE?Ac5 KjS3F/$Fbb`%r,T5/AiR{+r9ySWOVQIGQJ[i-:l9Y!MEHP_=(;uQIy' );
define( 'AUTH_SALT',        'Zrz0_BFMI~@IUEJ}Tx{8_#gXg~ScDUuFYQ5^5AF.r#apMUp0t-,,%M22[R.ml(yv' );
define( 'SECURE_AUTH_SALT', 'JUgl6m+o=]=zKv.%U1(H7ao6P?F{s^.5h}` ?m5chlqE3Lx+gqdJi>f!6gc1o6Fd' );
define( 'LOGGED_IN_SALT',   'wPu]E7n1l7oRRR^,X}d(|)78,_M}3UDtc2v859ddQ;PzG+6u>|lOfK/lPgWd>zly' );
define( 'NONCE_SALT',       'X}Wv7x#G&z!|.8{D}Hf[(E m2l)!UUdvpq+]Het<fhP)jRD!`d3?Q|SdmTFli-U7' );

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
