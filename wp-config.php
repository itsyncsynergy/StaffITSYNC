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
define('DB_NAME', 'itsync');

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
define('AUTH_KEY',         '_ 9 Vm:g{+(=VAov(=/l~Q.4i]I>dlca48hyr4CkSoE1}5qeB(<|=LSV]&IwZ&==');
define('SECURE_AUTH_KEY',  'N)f=![H:5/~[crXbsD&iiq3Cpfh>L.m~v?Z7m12Q{12y-5$vM/&,c}7qOP.k&Q{V');
define('LOGGED_IN_KEY',    'Y~o{QMkp_@U7OXxpxc>$%`AWfbbq?5[cKRMqFJRBL|SE!In!:RQyUg$$A~[9f$qP');
define('NONCE_KEY',        'A&^LF9T&=a5-#Q1yFeF]G+Yfmh!v_Rc_K<uv 9<^Izb/=@nh(o@y8D/%VRA>AEE`');
define('AUTH_SALT',        'guLT~W/TTvTat.D1yuaC!HJ^G$3`5V-aMzo$=+rtLf2%/gDt]WlGS/1w~HaNCh4A');
define('SECURE_AUTH_SALT', 'iX&ldTQYX}h5aJPOMN.g$]H#6J~V5%_K)gzs=K}.lWxg$VrP-@)#>~zV5[7dfcgI');
define('LOGGED_IN_SALT',   ']W+sTt_#kOJoU5#8aZ+&MyQi%1k+S%,xfBDGbZG%7<?ySfoaC[+Sh^$Y7Wu{<OrX');
define('NONCE_SALT',       'jaq-e0GzY3:an2l&&U}V!Bx?nZOBkNyve04zy&,{kEsm;hpZd868$l<.EiM-L(.E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'itsync_';

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
