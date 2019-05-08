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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '8R@.piAyVv*^Xb 2>BVyKoaa}y@k@j6+&%5I}[fKO2l_GP3`ip]p<jkW9/dc(7]U');
define('SECURE_AUTH_KEY',  'l9# i^&<-$Y!|}..8{K:5oS0gB3J6F:~W+,Kv$&r3LT :$U[ViWd-U->?u`-=um.');
define('LOGGED_IN_KEY',    'zl>h[3pa,RwDt;i-E52X]dMgb7bs o</0Z V9Ck{x^!TBM=n2EF*:NN4Dl&?>x*g');
define('NONCE_KEY',        '1iXZd}7b1XS,|EhD,cN 8o&P9mP^g:q56{GaZBri<,M=EfDY9Yl[{ppFc_pceS*/');
define('AUTH_SALT',        'xP.-G?o6cvJ%l0f&|m3YdRP6?K(M<}bKK:/%z;FKF,x!~Og@RkvDFQ_73[G&#Jy(');
define('SECURE_AUTH_SALT', '8my8.owGP<.65:eQ{E_LXAjVvpBiC(VlB/Sg/$C)mt#evQh{*LE::QEJep4=4m}Z');
define('LOGGED_IN_SALT',   'GjFqUT/+f$)3B>L.u}@9cDieK{~-a%[s>q>.J}2TlyI~s>dSTmvw8usCg8.S{ocE');
define('NONCE_SALT',       '&b_#oO5Afog3!?YR2S;Y1v%J|e@1>f9Z_RyWCOulPt8],jzE>Vu~$+`V+Zxu[` h');

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
