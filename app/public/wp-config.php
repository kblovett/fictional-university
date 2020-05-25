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
define('AUTH_KEY',         'GQuidKWkYlLfP14NVMDOFKYJIfWDef7Hb+lPOWfGiP8SUexPuuvSXFO1MmfguXSL0qtbrBnunf8ln5pPj5VrwQ==');
define('SECURE_AUTH_KEY',  'we0SfQ20X7AbQLSyvvBNsmRnOLGI8W3HSVZ/CMKRFnPyiYKFq3aiLcBlF2LmsPnEXdoE9GQBGbN6PJl5B+3n0Q==');
define('LOGGED_IN_KEY',    'OR1rY66vmupluqtJR3WG7gZF1kC6fp57gCdRUT34GywEwd3AfIYZ0JFpculR7fJSZ4+DHVOgONOX/QTjz0LAjA==');
define('NONCE_KEY',        'c658gdiz7kT5zWS9OPtytg5Ekjqcx7VqqBScBaAVXLxYsjhnU0n8IyxzBaEtyqajBpkWcZLwzSC4soFx7o5gjQ==');
define('AUTH_SALT',        'asxFkrMx/Zg4fmHDUEb05x1csdY+0ko4oyPbu3GRHTb9QUz76XClyc+8iQTUrY2iCYC4J5p7UKR0Il+9t4n2KQ==');
define('SECURE_AUTH_SALT', 'zgJS7z6vz3plYPRIxBM4OkBODbrYo9EQlgtMvUBARKjcitEmMcJw5aTSPyPusyilxD+gi4Ba+QcrHMvyTEeerw==');
define('LOGGED_IN_SALT',   'DwHGtGcf4N23KyoqghsHohkXXX0/1XIhXNYfzmXJq6Zq5j1npDPlo8PiU45Y6Cm+Lwz7If1/n87rU8r5nrOpPQ==');
define('NONCE_SALT',       'fPwlX6olFw7c6xNy/HiWvQ2LylnOLYTZYiZx+vIzVkfKmXv2RxExUsYOim4GrujuI+L4sLfLJtCiqSeCCTAVCw==');

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
