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
define('AUTH_KEY',         '+YHLlay8m4X+s5ylx2KG/h0tC7pX6ya4cxZfxA8gGvyw+7VwqLtWU3kCBiDNINEO7oL9fsdFJ+VjqxujciiHbQ==');
define('SECURE_AUTH_KEY',  'vPxybQbKRjYOvQi1PNE1yBwozpf3oKI1ODfEmuw/Z22kJReI6i8YgRR4zMC7KU9Sk6GlKIWZIPbAVhJRw0XOBg==');
define('LOGGED_IN_KEY',    'aSAxp1C2PVxunIPq4iCgKt0CHt38JBeQ6SCDKOXWlZDa1n6RawRYF20t+x8fgo6XTadcA6C9ecKEbIXhqqs5VA==');
define('NONCE_KEY',        'IhVAF6edM9m4IHwP3D/GIKzYoLInfN62XLcLS0UnpELM5MWYhM7psklst0qZVaaUikfo+kJJfI3rAe/1Y/MdFA==');
define('AUTH_SALT',        'XH2erMEqWPpyRLP6iJCuSAi0LA+voh5i0dJjhBEdgbnQj4UXSXpFEPko8CuVV0osbAcK4oQwHyCAKuZ9OyFkPA==');
define('SECURE_AUTH_SALT', 'M0ZOjFpolwkZbeEm7qsQSQnHIboaqL2EoaRSFOQoJbZXY7HmjoXexdIZT4A6AKyJxEXsELsJ5TLm43jC5K7bCw==');
define('LOGGED_IN_SALT',   '5Hwk1yjkvkkNlZ5ZEztrXK7eggarBqvBB+3hZHKA0OjJA1Qo2VvUKs59M427sDTOlCNnxlLSWAvq1YJVlVQJUw==');
define('NONCE_SALT',       'fSJUN+gbVc9p2wGJPZSocfvUV2/nNBzSu0HklZlxK0NVBL3BQGQ6WYT2iYaVfTF9z/byxkCh+b8Dwvxp9DyEpw==');

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
