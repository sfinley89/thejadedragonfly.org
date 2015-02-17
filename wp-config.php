<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'thejadedragonfly');

/** MySQL database username */
define('DB_USER', 'thejadedragonfly');

/** MySQL database password */
define('DB_PASSWORD', 'Magento123!');

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
define('AUTH_KEY',         'FXigs-r/<*nu],@n,_a>%lc#bfUC#:+JC>(Mo5[!{n 7cZy_ZW_`;%@G#tu{$?xq');
define('SECURE_AUTH_KEY',  '2c_2| M&v~4_2OQ<$r6lk+m;dku1u{CXgywIQF)]}ejsP87S9*++%g.<gU.QL5a%');
define('LOGGED_IN_KEY',    '|<a]m>>+Qp;,=/ qxEHcz~xJF`~?;+jphH.pG Hl~S.Q+nQTCIV5Lo(a)cMA6e5Q');
define('NONCE_KEY',        'a+wN}[#+[R]i|b3^lHy_Owrk+MBfb{6~ KUu-t2vmDBmx|URxV}+|9A.HE7PUa]-');
define('AUTH_SALT',        '0,1x:ZN+9%W~$ur9vw-x4Xglv&ftWBAZQ PU1t=JJY|~@M+|eVm+u5qB<0`,Q/j=');
define('SECURE_AUTH_SALT', 'Iz|*|;d1XZC>7C`8a}Q[_U+i|?N&?gq,{s2Zt3|g 6$$mDENth%@*RVb/G8KI,-O');
define('LOGGED_IN_SALT',   'SSG5<A7<)-}9#0 fkx7WMe~*$--a(xxv-rM&{J-|~pqF6pJ{LsBJI:{412#BgRww');
define('NONCE_SALT',       'P6+,HmoLBP=Efe< 94LK{;j,>+^~9i!+8Go!NF^t9B|y3Y{qI$X.bZOq3E |USbS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
