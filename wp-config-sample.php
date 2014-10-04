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
define('DB_NAME', 'floorsdoneright');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         'K&DR?7aj<32m6>(3(lA{ht.!R:pod$Tj~qS.=I[OMmsJ@87EiZo+SdfNQlrHY9Fi');
define('SECURE_AUTH_KEY',  'HRm|%)JUvva)ra0(KWwseN 2,ams9$.P[}O&/L+}k?Lz6^|f*4q1^C3T`f?$*nEp');
define('LOGGED_IN_KEY',    'O(:J%Q:f((&wu$)KO_c:^:^*n%{3%,k&:+)yn|TTmY|%)&b/zt;j^L}*TCcGbM(?');
define('NONCE_KEY',        'k!OHb1#Zho;aJ [r@ Ie,j| m|;L-ue5=Fm(>__`W9n7K=2[Yb|-9AXA#![kqyjG');
define('AUTH_SALT',        'Mad3})?A}47oGR?QE`f|rv*qwP0 t~J~[4H,</;/-)OJ?jOTk!Q|u;h-1SxyOXLQ');
define('SECURE_AUTH_SALT', '9R?+>68]8S^$: )lD0A:4di@s_-lml+3iZF90m$~G1S{K.1w33pPI!!O-@D_{`lt');
define('LOGGED_IN_SALT',   'tS@K$:{Evi9>x%1XFlLJG?Qjd@fMYH_BS7I8}+w1J.ez>w7[KC]S_iZ-z2aP7a6#');
define('NONCE_SALT',       'JIP9@|oN2Sw~lA?PkJ>XB>]u:?K)5xO;+ Bc <No7pL!Z@a3h27?wAXwnYt~?UVz');

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
