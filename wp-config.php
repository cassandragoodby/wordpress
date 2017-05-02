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
define('DB_NAME', 'cago6756db');

/** MySQL database username */
// define('DB_USER', 'cago6756');
define('DB_USER', 'root');

/** MySQL database password */
// define('DB_PASSWORD', 'fruity961!');
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'O&_2W-|2+Khm4-DU3;yjGjIMGJJm[dLf *= w^VC>&7M8AJDAbxoW-8DDre$KfNt');
define('SECURE_AUTH_KEY',  'nsNAzp1W^lin O,V1cu_dA~ByWWfUH$|jr01t$$WCew.IqxdgO]5UZkDU{n5^hQI');
define('LOGGED_IN_KEY',    'X.M)XPB$XP78S0JW|8lbM<mvsnD}l.?JsqerD;d;5yJK;?estHIW&fd}Ya=V]AU2');
define('NONCE_KEY',        ']x5`X:V}B#WqGOxsbeyyO6Yk4VA4?h&6yT~FG%j8E5KOl{_O$urVY#L%:{}n=Zw:');
define('AUTH_SALT',        ',=7?/;`?]FtMe;>7(!c-L9kl)Fo)]ST3k:H.OOl^, WYWe-tpe/P1Jv=^?OT)91c');
define('SECURE_AUTH_SALT', '5$kVQ4w9v-~8)hmOpwEv3I+0tc<C%rg>^Pu+|7PibWVX,&E-usd1gYpA^Ig)D0N*');
define('LOGGED_IN_SALT',   '0LT|c#Av3>J0w:O}!r1@n#>@?9#/2Cw4Q1}%U!q$.a~@a2{EQs2;CIMufqT<ShzX');
define('NONCE_SALT',       '?mo[~}].8?0;2R2zqZ&kuFS++p+FLvn6-&X@T|5Gx~k}ETGNp}.g%:vyh~-SttY-');

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
