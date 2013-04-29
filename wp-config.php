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
define('DB_NAME', 'ong_wesfarmers');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
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
define('AUTH_KEY',         'y2W9Z>3xQ)52{7AU03D_d=HL0;;~.t;!},V2|CcC(#6([8cTvnfI|_uC^9!G0H2S');
define('SECURE_AUTH_KEY',  'Jba5ou3ogs-A}FKi$cbJ/;+>DRGsHo1vRdREj&b1-]Qai/^-M:Ah/I6t3_u|<D7 ');
define('LOGGED_IN_KEY',    'U_LFJ?Z+HhZf1gkFuJw[&/EO,KS7{M4CeKa9g9`^)W<MLf?N@?SR+3!hRgR&Rk>J');
define('NONCE_KEY',        '/c6am(q?9pmU?wc3YF&HoNx@+F!0(6qlp{C;8ywp;C&j=h3PXz+5GX]<>xI;#19`');
define('AUTH_SALT',        's3L5L;QLM7x+q+G5>6mefGvn_@UL 6,(|d*wXkyW $Van7BU3r%0[[?*SZ2dmU/<');
define('SECURE_AUTH_SALT', '>+(Yh$:07J_O=]r-t- Yuce{a*z}ZMKR<a~lGqE>yhl+bF2(x1?6UuJiHgmQ<V r');
define('LOGGED_IN_SALT',   'a)<td+W6/m(e|G!|YhQmq2-sP#0US#xa(d/OChs4N(;L%&hxuV9E]lm;yLsF%9=t');
define('NONCE_SALT',       'y^QHd;S[,+i~#[n|/2SfE>O_}ya75%-0/6BP?y+ml31DbxY+MGIErC{RD.+01Ui|');

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
