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
define('DB_NAME', 'theetuin');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*XWi2uD+Bv6X/5DN}HXZdlE_{_)FzzddcLWx},A5hbNi(VZPr[L`#ONx}F:-uH=$');
define('SECURE_AUTH_KEY',  'Uwrc441/0m3j5p*+>0TuaI&wUX6*/&MyxjJ;cur`N@R(2dD1@<]EOgIJl0LVL S(');
define('LOGGED_IN_KEY',    '<6XS9U;?_nX:,6tQJiQa]8rr4K?d-)AB18{i8L4t1y&YnE*!.mN4G:mx12;mE-^,');
define('NONCE_KEY',        '{Zyl_:K}Iu=oOiRSF/W<#+~TwXW2N}(O87`!3`Ky0K.|-n2ica<{HuP_p p5!T,g');
define('AUTH_SALT',        '7Mc5W*iN+ASAnL.1lxqr|R&85P~nV~r}Dmox$}B<>Z5U9{1|/Y3v/4 ;?jBYOXGw');
define('SECURE_AUTH_SALT', ':8ya6K$?/?!SiH$|Z*4Q|kEzGa0x:+zx/k~}A/ePY+ckc9pQ+nDrtXKh1P&7I[$f');
define('LOGGED_IN_SALT',   'R,4|A-<rVz!x4rDB xsFxSe;.UAD1$T=!`C:*2t7R-T]E|;(=n3&Px+B,Z2^J24#');
define('NONCE_SALT',       'vS;1ie0uZFQ!omgUFmpihBvvoLW(UcvI0izM6yXJz~@TcB/TV|f* >oH_HQ!&BN{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_tt';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
