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
define('DB_NAME', 'virak_pp');

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
define('AUTH_KEY',         '4+`$|njb=)3/AO,:?v=o-p}iPo#Z9qlHtJ7fAWV,_oDJ%e3eU:u`l|bxSKzc[m4C');
define('SECURE_AUTH_KEY',  '!K-mgQ-QL.X1:}F|k{5Z+w[4Ek-IF@[M,j$(.*MN,Q_M]5I,d.hS63?wZuqe.L,e');
define('LOGGED_IN_KEY',    'Q3c8ZNgh7K!) @^NjS?C-,x)L:.?sF3G;yu4>_!$0z!XQXo1_1 /_9Xx8.X8N^;K');
define('NONCE_KEY',        'LBhe,![(Zki)T$O~+7o<`;`uCVv&fhfzVW_rqnV@p*|EWlk,Y;:u0k#qXA5r)];I');
define('AUTH_SALT',        '+jvUtN(@G9dn^vwT%h22^o+]`q8ug?%Deufl_o4XNO.VWR)dY`Za1CS73gtpV!:J');
define('SECURE_AUTH_SALT', '7Q=2EB-Bg}BqeYh)n]4,=[X{+LEsHbij,rw`?y5@l^G}V_U?TJ+h.6#H15(.u~+[');
define('LOGGED_IN_SALT',   '|d(yyuNWwos~;(k.-3WK?^rMJ.Q$mnXT|GhDc*lk*(T~g3@@OIelW#GP#ee1ru:}');
define('NONCE_SALT',       'b.r8F]wbU:s|ltbH;GWlQov+zFt.;zu21@yF<kUg.FyMNmYOIL+7^mj=W8lY)5/[');

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
