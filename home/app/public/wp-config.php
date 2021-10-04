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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'uEB7d75wPSAqYsXTpr+0AB3r/VvchJMXFJBZfCLbqu2+Z4neiNfOa+dNMCqER8QWbwMvcMPDkHRck0CdKZUFoA==');
define('SECURE_AUTH_KEY',  'oqURDyM2wzPksA9mk+fK+wGMy9TtrMb8eFzIQ0wbRTG3YKYEW+uMKOkQfBtNXF6F51QDaraCfIR6wgu/PjO1IQ==');
define('LOGGED_IN_KEY',    'FsiLuA4hUzVpBiVEXGlJVrITr7XFBg4iQloA7G6gNOOrv9Ndf+vMlmboKWTsogFLmXTERKDrfc+/fK2zdkxnpg==');
define('NONCE_KEY',        'GlpIR0BU9GmjGWUBzPb7ZZnVRKXJW7BP068rNfcdLBJxiwHzmX8laGByKp9fSvfUjfOzcDSxDtWYjJVlfbyfmA==');
define('AUTH_SALT',        '0npUPQJIWZS8ktF4axI8oobXwB3Z6G5EMZREwGJNMImO6z0Huy652oHpfzOsmCCWYTatEH8M+CNlfqM/96TAZQ==');
define('SECURE_AUTH_SALT', 'WYtnLnFWuelEA98Uqvvq8156rD7fvbtDyxrKu42MVcPEo4okdNycoX8EgKmz2++YI4ygm67JkT1L637qa1HIcA==');
define('LOGGED_IN_SALT',   'edLnoRiXjIPs60CQVqNN1xqg9f6uVFTQGQj1WZ/LOAkGxv10xpw/8+cgAWei1LkGfpTmKp++UOGE+8cvrGHvkw==');
define('NONCE_SALT',       'G+p2t1Z9T+5deJEgoUcLy+EynGTzmZdXd3tv3j1gnZe5/Lblm7e1vvo/TziFcvufDB5lF+mpQ1qTAfWIhp5xZg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
