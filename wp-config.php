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
define('DB_NAME', 'pranachiro');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'n5Q}JWN?DSl9hH{.IOQ9Rwv$Ic4w`3g<3eu1<SIa9(gc7jjvrLNNH?^!<F!Oyi2g');
define('SECURE_AUTH_KEY',  '5zA-OBt&/9n7fdoQou[,s?MD7+Lqj#o2Ed4FpDbx9[CGik14wsaO4n>~.b#1!.~T');
define('LOGGED_IN_KEY',    '*8a>x<:4@98lNv`#r^xEdg:Tvqpy1w_)6%tWZ^~+Iv7,jzoJ2!^a}jNEkkn9T)q;');
define('NONCE_KEY',        '[Ag]}{.V4vcC.zE?DOOjfN@c%1CxVujuhteh1rCPa]3)J`4~/UIKEeKU&r9B`k|?');
define('AUTH_SALT',        '^OS{Z&Ie5YlanZIkey69}^K[4*@|po[~D|B,({hU_j];2Y2oc{ske>]u:She:eEm');
define('SECURE_AUTH_SALT', '|T@$:A>iK3GH26WX0vcG2~vqC3@9!/WiI<b(aFRJUA8C`uT*`T`Az6krsbw%lq@%');
define('LOGGED_IN_SALT',   'G>0<D&Kccia1m4Aw}<a:}r>F|4*x2yIW1EEH8#?`W`=[jI~[.XbZ7bLb1]6qmA&2');
define('NONCE_SALT',       '<5.Xj)_zS#|fz[-rU+5_PTlw/i_~c@iO#*yTgXT+>QI2Tvcew&Qt*@Lf82R},:[1');

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
