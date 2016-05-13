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
define('AUTH_KEY',         'hMn}uL6i0N<;c>xZ+yh#/gV`6J:&~D=>fd60lb3?3a1r <=Z6zW6_UI?ZY*)v5jy');
define('SECURE_AUTH_KEY',  '3BxXWro d+66pe%E5DS1<3K*!9zLs&nuJbj{y8Dw3}vWYj:;Sd=Ulr$7x/eKl71p');
define('LOGGED_IN_KEY',    '_52{<UaGIwN9eR;NuP}^imh;$C1NzKoQs~:hvqI X8ux(OrAMGWBoQ5J4_z!Vgry');
define('NONCE_KEY',        'w|98fA=}6AF<DL.*{8`R;zybf{F@>j=[Z8w [jd#*{)5VdZD_wb]7eomQt#9y~;,');
define('AUTH_SALT',        'q)L5,q6tYMg^,^8fprJU12B/Dzn=&gyO6HB>$^wCGt*R%xZ=wfk_htg0Y9%32,R6');
define('SECURE_AUTH_SALT', 'Sw6gRNp+$IvlRI4z~Lc)m=sqi_m]cl%9:^lWhp3P5:w+ 13;N3Zcr(X@6^KkhSCC');
define('LOGGED_IN_SALT',   '4?+{]dJ6UNdOue`q@=KFYWswig%mEdaj<x39fVVt87`*Wz9VfkHc^W:xJz6{7,BW');
define('NONCE_SALT',       'L6v-So/kccpzOE}+?/WV$x@:INf4zMO(|rmsN`pKtblE-|]2eu9M}`&6KDf#~3T1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
