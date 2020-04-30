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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'k24j43191014731' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'ONHhXWb4j=/5-wVfNV3G' );
define( 'SECURE_AUTH_KEY',  '(5v!kI)mPIL/(DU#MbaQ' );
define( 'LOGGED_IN_KEY',    '73@v$tQrN=#)+RRpTP)a' );
define( 'NONCE_KEY',        '(vIbD d+6y5x_/&xN_I7' );
define( 'AUTH_SALT',        'C!jS#QE$#Lt3W*bx#G48' );
define( 'SECURE_AUTH_SALT', 'Rq/ANSO995_ +A%c@L%x' );
define( 'LOGGED_IN_SALT',   '!XK8j@3K70r6*7EgFtcj' );
define( 'NONCE_SALT',       'p71YCU1GT!xfjL#&!*Fw' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_fs3cjwtx9z_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );
//define( 'WP_CACHE', true );
//define( 'FS_METHOD', 'direct' );
//define( 'FS_CHMOD_DIR', (0705 & ~ umask()) );
//define( 'FS_CHMOD_FILE', (0604 & ~ umask()) );

define('WP_ALLOW_REPAIR', true);
define( 'FORCE_SSL_ADMIN', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );