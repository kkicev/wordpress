<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'test_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'p/!*~h/|*:g&Tfv2H!pK$W7/L#-mHK9vzo8-7Byk8)?0  u,BCw)[Q:}De$5<kE)');
define('SECURE_AUTH_KEY',  'k>&[ HzYVD6VZ*Jt}jP0|^aD|uQWO()Sp#d2R]15@@7E*([TJ>&3vUp(w[OKFzXP');
define('LOGGED_IN_KEY',    'iKXH[NEi9*3`4q|t(r1]lDQhS9!MQj|H)u7MRx=T 7O=zVKKda85sw{T cxHW@Ss');
define('NONCE_KEY',        '{;mY8.%RZdPX%6 KOuB(BW@Vg+&y&.umIk,}v=7C63c[;S17LTM:SXj>tXY1GORy');
define('AUTH_SALT',        '%;g}9p|JUsAK_%aL&@hyTJH:syL}a$ypb#b`A-{VT#79@Q&Ky)&z,U @q:w~;CP<');
define('SECURE_AUTH_SALT', 'M!3lIM$1>O5PJ|9rRBYn}1)S.}>D| ;5cF3FOU-VH_?=W]Hdh0RhE9F1/L;;XA+=');
define('LOGGED_IN_SALT',   'S4_|~15nKc>DBdZ p++mXnbD,%4z*xe$Ns,KHd|vlr7WZ>sq<ha[ktI.hNuC&Z5g');
define('NONCE_SALT',       '&Ki@n5r>hO{okIf&x/UGX-6I~J%y0MWh;F6C3%&JZ%FIP??+bxIixfHN^=H5<+%R');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
