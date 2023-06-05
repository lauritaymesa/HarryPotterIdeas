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
define('AUTH_KEY',         'cqKjM1KjTQyouqh4RxMK6DWbyV3+Xkd0zA278hPpYyYhgAg4OIUUS4IMCGdjM50+/2TcfekIkb1awWxQt7NsZg==');
define('SECURE_AUTH_KEY',  'YpSLTdN3tqxP8R3P+WiQ40hrHlha71JwCjsrqFTymi4BsfF4PBFg8d55UTBgA63109R/8h37foKoJ35/gL1K8w==');
define('LOGGED_IN_KEY',    'SvDHeklfAWo1FiUZDZ3/nm6zEwDUoU3jCEzIe8mYUdK4RIM/p42Cme1qx8TQsPCGumVswkGJz+qWXZO/pq4AYw==');
define('NONCE_KEY',        'MMTGp6vx6/dCbqp/mAVA2fFGGPm8FyjKVJ4kN0mO915XIKcHURsVWXepIZsAHD/eENNH6mnQbNABvNLIDH9aGQ==');
define('AUTH_SALT',        '2+rSDZy+mgv7J3bwCLl4CYK/DBek2/D8GQcTTzyosAKDwUDIShihrAuq5fcWtQP/xlHyA0ykC21kiyo2vgchVw==');
define('SECURE_AUTH_SALT', 'Yl1qkq1tB4Vx/NDzph08af6ChBHXBd4JxWmHvWZUyoFbMXoZAzOeTb9CsXpyHpYs+lBxHJak0NBoayUJhA34CQ==');
define('LOGGED_IN_SALT',   'YnAp2leD9Hr6nHao4uDFsY/nTBhpM5ZoW9QGSN2DHWIOgD383Vwv+iaEIGoRA06hS9T5ZCEUp12jVCEum98nZw==');
define('NONCE_SALT',       'fVecYbElB533tYn94iurN0UJteavmsjFO4YM9QkjQxgq3wPLtG4Ycag/8aVzGz6ABP3AtA9G5IJ48HwK+Czb2A==');


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
