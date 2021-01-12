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
define( 'DB_NAME', 'ds-karatedo' );

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
define( 'AUTH_KEY',         ':>!!g`o6 $:$FQ1zM8SDi5QCe]v0GbEXy{@N6>qZYx$lK~MnmM1.!mm5-CHod}3}' );
define( 'SECURE_AUTH_KEY',  '{!q^Wac%gJcs9vt=ZA!q /DL/mnpiSD0m&3)J_@l@pZt4&dj35TUiy|Tqv#CrQ$q' );
define( 'LOGGED_IN_KEY',    ':,`KpM7G2Cdb#pSSw48:rq}2+?3Y#ECG?Ibe rF1-N$vwED[6L@+&yH$PiuQ*Ka*' );
define( 'NONCE_KEY',        '7R!*7?Wx@[g}F6p$x5*:y_MZHOUpq/91N3,4m%]]N9|orncZ`8Dq.YyRE!Y4FN/p' );
define( 'AUTH_SALT',        '{e9mmlZ+ZQpP_1WLq-iU%v<gH$WEgpngPkGtg(^xUwYmJZ*j^0eL[L3Z*FHj[3w?' );
define( 'SECURE_AUTH_SALT', '5apa6&yw$>f]YqG40mK#p@-Ro/5i~,D~g>a6Do2a7YNmN0>})@[O<z[1lLDKz6Og' );
define( 'LOGGED_IN_SALT',   '5x&76!o&eob3y==acU_C8uu]Av7?x6J5!kIoI$K5+q (i+K$I$#4(0Elod-&e0qH' );
define( 'NONCE_SALT',       's<h+&W>oRXG=:?bFDxh6`OG/-j83wA%`(U0bs*{59{BN$g8b~q^R?2r1ac)bIWP(' );

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
