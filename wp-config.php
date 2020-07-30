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


if (strstr($_SERVER['SERVER_NAME'], 'local')) {
	define( 'DB_NAME', 'dcmarketingsolutions' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', '' );
	define( 'DB_HOST', 'localhost' );
} else {
	define( 'DB_NAME', 'u107548975_dcmarketingsol' );
	define( 'DB_USER', 'u107548975_dcmarketingsol' );
	define( 'DB_PASSWORD', 'Pepito77' );
	define( 'DB_HOST', 'localhost' );
}

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
define( 'AUTH_KEY',         '(7qXX-*EXE?dS%#}>@RjSHhfp^  -oJd^V~OBCYm]%^YUQ.Lmv8f/k($nEze_Lun' );
define( 'SECURE_AUTH_KEY',  'wsB DWz>;vo+Bk;w?DI@-$#qP^rJxBV *g@*DLHV*I5q.*V|h{V&D!5#a)QrHHjx' );
define( 'LOGGED_IN_KEY',    '%K*TZ1hf?&R-V2k&6ae.A)H]nl^u30c@,HK-oG^,]$!?`ZZrvTdQWE;0S/1A<W;W' );
define( 'NONCE_KEY',        'maXGR8B;?jLl|l*[w>]5q,h$bE{52sF:s2|62u3:~Yw@UVKTEU,w$G9-]Oi=Y0UC' );
define( 'AUTH_SALT',        '54i8(FxZ`3_Ou!S1++xH}SWx&h.u4tZ9} iF&/h1ul0zy*>S97yV[ebt&V=#+I2=' );
define( 'SECURE_AUTH_SALT', '|oOZ(u hYSg0p!RrZ]E.gBT(Mw3BMkkHT<9zS6]m5_o%vEay57rTo} T ns:mpk[' );
define( 'LOGGED_IN_SALT',   ' /Z)3Q|oo}ThI<HT`mP1{~ =m)5#v|*|jO,upP H99S.?l7)J~U0)G8[#F(MjW*o' );
define( 'NONCE_SALT',       '[0XqSuj7M^~|DD<8GPci:s/7`yclz|k3EZ /Y6F;eD;Y1EWvVM5.|f]r;qlvWP5-' );

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
