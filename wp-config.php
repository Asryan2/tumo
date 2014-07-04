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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         '70~lygJ4(n$maJC?:_E|J2Qx;&MhUYeW+Tz3<A#PA)8[QWD/7$+O1sV-{vR?uBsN');
define('SECURE_AUTH_KEY',  '/GEfoG8T-@oE/He?02%<yvq^)Oo60Ic=BSgMcCCnu:q+V|`AjKG`Asxnv7}uqJ^g');
define('LOGGED_IN_KEY',    '}aI))1UgY7Pf7[:?>%gYw8XF.[WaqDl.?kEGQq53|+^az@^+3dfYy[sUeg>E+=Z%');
define('NONCE_KEY',        'iT(%#?EK%fsnzJi7y;*YnQ11CAX38b dX^B=+J%xV+,K#Wj9VYaPZ=`;LnBVRf,~');
define('AUTH_SALT',        'KQ=mxi5fnA-*F;9sCcWO)%8d>p.++oPI-eJ{,wf&N+0F:j&&sL96CVh<`q]^?A5f');
define('SECURE_AUTH_SALT', 'Pz_c?}`++f.c9W QF,kyg>m!SsI]6)+!k7-a*Y6zrz4F(+FRJ#<BBD7[8+di.Eo+');
define('LOGGED_IN_SALT',   'gLCTGaw)-2M@dT0U<U<=X]7*]/O/jG+f1-0JGa**9o-;E*];pKf`_o?|gRd}hDi|');
define('NONCE_SALT',       'ud@h;TmAB+lh5gu7& +L3g6;6&#;A_9?yF1Jfkw*3(|XKz1]$2E*WC]jx;>`cw0v');

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
