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
define('DB_NAME', 'berb');

/** MySQL database username */
define('DB_USER', 'berb');

/** MySQL database password */
define('DB_PASSWORD', 'btx7yamCwGdX52TW');

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
define('AUTH_KEY',         'jL4wge=Lk-ds 3HeVkM+TRe-zM*2j._&x3NU4~%=4Wkt~E<+H}vA}5<S`F>Jg1Y#');
define('SECURE_AUTH_KEY',  '!g|JpxSEjs_@Y4^=*}TQl+zL.bFeE+F&EvCJQ<fYaBc+7n}omNM@x4h3(|V[!CGz');
define('LOGGED_IN_KEY',    'l?7.{c <ng!Q}KigA@vdiMr<?M4CL~A+5:WI#5GXz_*z-6;|DeF/C/RF-(y~pcIk');
define('NONCE_KEY',        'YPuJ1e+6Ya3&z:?<,EwY+LjL{F--bBcr;(|{ Fp+bQ*+-B~|u);(HD./o.qfq2C~');
define('AUTH_SALT',        'gaqoW~-T<bXG*Icm.s^F(Hhe$++$+75JA>cnw)$bYDWJ#+G#jQ2;b,gBAYU|7jJQ');
define('SECURE_AUTH_SALT', 'a=z.)HYLW`&+|V?fUwuiCjlEEX]~m`z6d-I6#K}-J0:5nXQj:ObM4-}2<2^M]n&c');
define('LOGGED_IN_SALT',   's$[Tf?+>dAh-N4`}$<*rm|?]Fp|~;KHvj/iw><Vc_L*aj- k}Z7u[py<Q<hFK<4^');
define('NONCE_SALT',       '%WE?)mV7Pq0qY<prvJESyuna48iV)*7xmUQ|urL,yadKar(gCUW(1F$Iv^|H^*Oj');

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
