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
define('AUTH_KEY',         'hjC./?17V88.K&3H1y7bx5FIzVvP9~~x%*NrT%wcL%9T&$-;6f+}Zqj!Hbap~&ou');
define('SECURE_AUTH_KEY',  'U//]A>Z/i<qsJqt!#QORUXU1[[h:zFD/@U&/I.4|{zziy9V0qRIHnk>H&viXDc|f');
define('LOGGED_IN_KEY',    'Dv9_`U~>x N%elanEB!oZ_G-!_!0pP8=Esc C9LU`qij&tZG:Ef)|fZ3qQ#$0|Cr');
define('NONCE_KEY',        '}_`j;sxjZWltf!Li/<o.g4a]Xg+2kx 2%s>VJp`o(T(xXaP8Kl?yT9UZ;N^vZNU#');
define('AUTH_SALT',        '9Va<o)LiQGf$>aUW%~7t4I#2zq(mV~P&0]l3Pwi?T f0PzU,[{+yf5Z#c9#3d.pj');
define('SECURE_AUTH_SALT', '@=:9F,wJ_d=I?^b,j7d,;s(4J`vaR^,=O^z5l3Ho4*8+^T3wEb@V13VOgPa8KUhQ');
define('LOGGED_IN_SALT',   '^!#V^jS&{embzBb+pGZp2j+29gXN7/4-Y+M(0R.UIEKCtQhF4I,;lDFAsLm`?4*Q');
define('NONCE_SALT',       'mr2T_C@3tY!>E?xf%+c*0e%#1dv8D8:0XS*WiS|<xuagvh/?+B-S[mNTb|dOi-Lm');

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
