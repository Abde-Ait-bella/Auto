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
define( 'DB_NAME', 'Auto_Site' );

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
define( 'AUTH_KEY',         '|Csl/Ks,5u+#&Q1}U!s%e bU{328Gy/zXdP_~O]7/2tuGqL$?bMlFrD{=J#18Mi2' );
define( 'SECURE_AUTH_KEY',  'zn*dVlB Flf6k50q{V:TpX8tM.gVkGD4#h/u;XcaVEDZfGe|dSXO=vq9nA,dcsgn' );
define( 'LOGGED_IN_KEY',    '50ooDQR1t0{-KUZ1&sgof-6e3xjBa_[rZ)(VF49u.DzM^nWiJYSjR1F[l%7|lEZH' );
define( 'NONCE_KEY',        '}IkUbMsR(`-6*~uK/zi|&hz6j$QV>G-WrYI&?1yM+i{//U?U%}>R#Gg}yeMY&*zl' );
define( 'AUTH_SALT',        '! )l?mD%tsg~IuLwcOwJdRuO!M7SQ|r1{o3-{zV,=VC#XeDf6kWv a1pX,Jo$UDi' );
define( 'SECURE_AUTH_SALT', 'bDc$nnBH_|/ .]<UlJ-[,6+J%}R#)a:hH:dF,E{_7+5|Mmyr3OH~;)B(LU/sF8hZ' );
define( 'LOGGED_IN_SALT',   ';A)ZLlIV!zgy/0P 0V3>fG>y%%^xJxFm@T8*RY`?F/elQ|}V2A4lS%%&iU^ExNg&' );
define( 'NONCE_SALT',       '?K:+4t9<ykUo+QoC*x26ZzX>m3qcCzn.|dhs`z&32/wM<KJWYrHz^Y%&FNHsRG!i' );

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
