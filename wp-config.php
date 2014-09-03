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
define('DB_NAME', 'gietema');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '5d17330464');

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
define('AUTH_KEY',         'r!InL=|evOvKN.Z +#!<aKC~] @H$pi(?fdU^>88xL7!:r1-B+~.K!^D+xTIIl{*');
define('SECURE_AUTH_KEY',  'bMzTM^2?5[OVUwR@89Wyt+A^4p]NxS[G4+H5,d[5>+Z$q18QzcA-2nxf[(P()+]3');
define('LOGGED_IN_KEY',    '*EPL3[BS]$>EyaB?R4!jNM,r{_{|9%tg|38k9`U16M-kB6hu3np:`-mjfg$/w&@S');
define('NONCE_KEY',        '=A3J30BV(]p:eP^L+RIq /.fmIR0v[1g^AZcvCg$OJ*|8EStbPqfI*L1H2lTKf>n');
define('AUTH_SALT',        'R@<^gb&zIyo,?LOCnFSXJb?f)Qa+emV=NqvIzX~fKve/($i-+D$BO.g[b B+84(h');
define('SECURE_AUTH_SALT', 'Y5WL+&~6I4jy2-?`L*nzo_G752lI]0[e6:BF(m|%xdstNDt6q/@c, _MULSj!5%b');
define('LOGGED_IN_SALT',   '27wk$#Jpq&+DT/F3kDv~?y`j}&T0-0I41KjCu V0WpZe?q/FYg7E|t@k*),-yi&+');
define('NONCE_SALT',       'p^i~#aFQ9]5iFwMmL}_#<]CNy7<c/P=Z[fl?8geJz_c)cqq J_x/X9?M,i;ZZ<6P');

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
