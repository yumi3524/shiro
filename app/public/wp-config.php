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
define('AUTH_KEY',         'LQJXgXmXZX1vmUekg5CW0PeEizDg3jCcUIboiPg6X3sYreNmOsmfaD5WqU4wYRAR0mJXy5RQBgibK8F+40XnTw==');
define('SECURE_AUTH_KEY',  '6hGnkIeiiL83iOJzIcPYfssGhncO7PZFbcY5+KMTuRbk+krF40j3wNocMx+79QCS5KDRCmlrIjvqiRIa2p+N8w==');
define('LOGGED_IN_KEY',    'eJQ7ESWW8V2f09E9f/F91nP/Kv6Lj8g5yU4zByjfhucjDU4SGcNIEABTEuUZ3MVOgCVHglrZlD07L0aSLYvC8Q==');
define('NONCE_KEY',        'qcTWx17/LSnQ9G2Abd9WLwtR7KtGMJZ77W6TDKuclKHniMqH18VnnOCy7V4X33Tolvy4kGLM2uW1DFVFWZNVlA==');
define('AUTH_SALT',        'JhIxep1ZxwM4eyt11BHzltwIeEwTtmJRuld+Dm32k4MJ0RC13NCw7cLNwIG/iVjTcXCTI3K0N0zpgDNN4fF9wQ==');
define('SECURE_AUTH_SALT', '8AMgO+IW66s+thuwQaEFi8ZDxsnI3z3pG5h+0gSSeroUWZ3k1dQEvLQjE2zOHt4RJcSUt4GgloLKLVk35AMsTQ==');
define('LOGGED_IN_SALT',   'D4wLsMDPUqU9IiuxGG/lKQgfRHK2huOxrO+5X/1jId4k17qyfwT8qCKT3laJHSH61Iq7WQ/Q67ICaIrjRiXWSQ==');
define('NONCE_SALT',       'iUHTd4HXxQcMwbJewUUJAja+N2JKsPknMi8OSVRjV1o1luenUQ7Xb6dO6XYM9FMgr6Wf2/xirDPJwSxx/wVjdg==');

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
