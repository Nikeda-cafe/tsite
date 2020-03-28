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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
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
define('AUTH_KEY',         '/5pIQF17r+B+5D9e+f3WCzdPQ9SPHP3KvwRFd03Fftn8yuUK7X6FJ4f1Y86cWWZbWVNjlDn3Px1WwVfaSueMsw==');
define('SECURE_AUTH_KEY',  'm01wMyPudXnwt4wccZa5oGB8JMjxCXIIOk2ihKvou9ydbGPT2dLwULq/lepj9NqD/l4lvT+UfX9IjzcHO5rrqA==');
define('LOGGED_IN_KEY',    'g+YBeTURJ1TEEpwtdrE1frz7dXIG+ldBL753bvaeUwIj546Q6zzJGltH8azjyXtkg6eZ3j2DvD/riDiBQJ+0sA==');
define('NONCE_KEY',        'BSlcYld8PuXF8wA7tvVk/fb/HJTt5RUUzteAVC82wla/pIMGX57MhQKTreyMSFllw5XWbmTqCprKVnCHUf55+Q==');
define('AUTH_SALT',        'VjURjhOehFnZtIKfpsG8mFhVV885Bq5eaEKnbYjQRw4Bu2olzGNyLYD7j/QGQm/gfEkQKSxV6MfHCS4U28aAjQ==');
define('SECURE_AUTH_SALT', 'oQoOARtt8I7LKh3CS/dzulsR7ZsyR5K/tRw0jClUcuz135NYSJJb6VECn19juFUzgQDLoSeclC7B04b4UUScTw==');
define('LOGGED_IN_SALT',   '4jkYNRdPmKyAcqi9oQVMAepNdeLBwWgXCUnYq62sxYRtemy8GFvzClXeBVwTbDZRsv26Lb56GGUAmbNvXrDXVA==');
define('NONCE_SALT',       'aqbRRh1cR80Gq2Ai3wF/S3ty+xPmEcvqPm8c8aZRI35QdV7Em52a6TvoXGPpLr+0wdjIxCWDtQcY/2kw/Cb13Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
