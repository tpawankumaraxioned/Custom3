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
define( 'DB_NAME', 'custom3' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'C@{4uCqFI6kjbk&hjJIy_+{|Kh$cP(^nylqhBm2wnmIlaSm;gAxXf;f#(/LaL]Q6' );
define( 'SECURE_AUTH_KEY',  '%Qv$Pa}BQ_b3sTy|rP+~@et15WB%y bZPi`ZMiuJ:O?53(VT.N.=k*h^K>K6cA?/' );
define( 'LOGGED_IN_KEY',    '}ICkHETzJ5LNCmY.djK+0|tizyBN_T<k+B/q?=DG7@[,JSyTiD$hF&pXtqb^,0/J' );
define( 'NONCE_KEY',        'S20#}</`d-(U6sE?^XiLs/u<M6,]JB|J~-jS4/EuCL+4;WS{V-U]c_pa{-;*MU9u' );
define( 'AUTH_SALT',        'w~7r)G<;4P~f:}S;gD7)7{fPty%Iiv-uAP=-$LUB@SsK9-1U4m#pFQR@I3tv(o`1' );
define( 'SECURE_AUTH_SALT', '<UHh~,5JH)yrKsS9}>((-z~k(1:$aW5n5`a>yi6,I)&ng$fGV[^q/ eRw1*/5Rt:' );
define( 'LOGGED_IN_SALT',   'jX67]vJUtc]S_El[D$u2X3$bjdg[}e%4W+$8@y{D4p_v1K6FsVh&5U}`)?Z!g<L,' );
define( 'NONCE_SALT',       '525e;Ex%z8{0hnNE*LvJ2Z>x{/Npx,jJ VlhJ~+*9?LL+,M@oS4*/2(OUUqntv!a' );

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
