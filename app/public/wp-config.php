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
define('AUTH_KEY',         'VSqDZp0UYAb6hgBOV/iWpOy50nMvn9Bi6heM/o6u3Cw7SJBVRW0QIzQJ35+RQoP3ztS76gHR0dH0LnRoY3hTBQ==');
define('SECURE_AUTH_KEY',  'Yc1Irag8xSM/IJN0iYRVdPrlFV5NWMeLN3mymDKsKHFaGVJH2qLguXjmcA7fY1X8DYnps0hsUiGD07CKesCm0A==');
define('LOGGED_IN_KEY',    'uPgcwhK3Qxrl9shy2S1+SWYyrEUfxuf/hp5k0kxVyS2B1AlC28e+DlRgXg+El8rNH1BybvpQcD2124FFtu6zrQ==');
define('NONCE_KEY',        '7fCOO/ZKf3M/doQifr5JWfdwyQFOu1Kr5vsWHD98Th5H+WxcWshF2AMWMIJpqWYWE8Xo35mLwV+ElF/PcnS4ow==');
define('AUTH_SALT',        'dPVDCBygZSQLEPB17FylOMdT1fLjEQ3VSsDRuonyZ5lv7YHpBBp1fBhfZLz0X1xyJI+imDRAA3Hy3Pdc3PPH/Q==');
define('SECURE_AUTH_SALT', '+5NiUKyotfwN0HWYslE78gBxH4xs6qFqHYxruPDcOzC8wwv3H3r943r7FfR8c1VX7Vzg8yuFkqBxHkUx1HnU7g==');
define('LOGGED_IN_SALT',   'Vbv2i2077z5CqIkyhZ5D5M16t0l1Ux4SnX9x0ZGLSbV+lcGLyoFWI8etfTgIG8tklkL6tiCHqK5qn0OpXGX+Xg==');
define('NONCE_SALT',       'kiJ9XDOQ+fPbb1fwekoAoxypS2EykZDKcwzaCjrxECX+SLecGG07wy9+55KYCEqnmh5+hbQdLlD+sFwK0pBMAA==');

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
