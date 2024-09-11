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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '~t|a(zeIZW8n`>uxhu2J@q@Fe0$EY}Eign>c{9}>+i..ki4`b=|wUOQ:|&vmO[ZM' );
define( 'SECURE_AUTH_KEY',   ')3HlA*}6ic0ygz5Wv6g[6j<Kw)sq3AE#I]iV_-89fzS/XtV0is%o*!rs.vBOPgpq' );
define( 'LOGGED_IN_KEY',     '9++gX6[_?caYUzbnAwN$vQW`2lLyO9]`Wf!6CBgI*G6N4!~l?(5)T(;8^q0H1T^e' );
define( 'NONCE_KEY',         'RXBaK)+fGA5iEi7a?x44O qz(#1b0{R7M9Z_M~md@J<{tv0MIGa{FeR-?|=XSk-S' );
define( 'AUTH_SALT',         'v`= ^bv6IE)YE?W@DAw!6^Fd[p(y[ons=6^<kAvtNllN89T$+a,[#(80F6nwk@DL' );
define( 'SECURE_AUTH_SALT',  'X.ct_:0#j{oiC_FRTf;v16U_.~-hs!_Vv,x_mLVquC0jIlbl%w|7KVKXLrqig!v%' );
define( 'LOGGED_IN_SALT',    '?*_9?[lZrSe(Q8.hyTLXuztT;8S24;<#?(&1{SA&dWjiaGr/?P&mL8hFw w>>_rv' );
define( 'NONCE_SALT',        'v1uwFy-*ny20(ndVf&&3WH!`J8j~64 o#tE6*oues~nqD8=XK[d(yc/IaqxX?nQF' );
define( 'WP_CACHE_KEY_SALT', '1surM|@|uv~g-ANw*//bUjOtDP|P$BN?/<4x81dh#DsFCOc8)AW9sN65_T0X5(E{' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
