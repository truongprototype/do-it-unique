<?php
/**
 * The base configuration for WordPress
 *
 * Copy this file to wp-config.php and configure it for your environment
 */

// ** Database settings - You can get this info from your web host ** //

// Check if using Docker environment
if (getenv('WORDPRESS_DB_HOST')) {
    // Docker environment variables
    define('DB_NAME', getenv('WORDPRESS_DB_NAME'));
    define('DB_USER', getenv('WORDPRESS_DB_USER'));
    define('DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD'));
    define('DB_HOST', getenv('WORDPRESS_DB_HOST'));
} else {
    // Local environment - customize these values
    define('DB_NAME', 'wordpress');
    define('DB_USER', 'wordpress');
    define('DB_PASSWORD', 'wordpress');
    define('DB_HOST', 'localhost');
}

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 * Change these to different unique phrases!
 * Generate using: https://api.wordpress.org/secret-key/1.1/salt/
 */
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

/**#@-*/

$table_prefix = 'wp_';

// For developers: WordPress debugging mode
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php'; 