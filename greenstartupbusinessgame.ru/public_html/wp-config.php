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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '-/greenstartupbusinessgame.ru/public_html/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', '-');

/** MySQL database username */
define('DB_USER', '_name');

/** MySQL database password */
define('DB_PASSWORD', '_pass');

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
define('AUTH_KEY',         'AG+|Mc{]1e_Cn+R7qEEZxj [BQr$X~>qvybK~f( 9;n5THdnR~[}OxO6YhCm3&[e');
define('SECURE_AUTH_KEY',  'j^k9*=~m2F%YHeXO5w=D9^ZV]Y?0wEwd8Va+(.K?)WZWQPD0LE~[jgQM$p<C<%qn');
define('LOGGED_IN_KEY',    'ER43qQQMO]+(Lj`B#E3PbyJ~xOT7:K/bz*!*b(H3Uus/HFGY6:;[dt(rOCiH:TH=');
define('NONCE_KEY',        'J{.=Z$8,6,aouFjds5Hl8;+U,o0bu<mM8ueoH_2N~D|R;w}A:|Y._F/&dA06teT:');
define('AUTH_SALT',        'J8zG4$c,s0>4<B#zbv 8QP@@^LH#4PcxEGLipHOO! {i5;c?b:Jr} y,^+2f7n1k');
define('SECURE_AUTH_SALT', 'tQF_#B)o~^1TYD:3z{v(pc<ib6}G},]DY%+[nsk+(P)iL^ms8+>6S~W#&ZQNCsOd');
define('LOGGED_IN_SALT',   '.,HpDwWfhh}?6YOP(U@_*PD,Hc8[%Fuj=w!O4xtvj:3I3#u<x|t9vqP8MsNP_DC,');
define('NONCE_SALT',       'C=Ip/okVHiMt#Xy5S{y=9.tLWe!S5@,Py9M~nS7oaWfJ?V:&l;+*I5Z=tK`Uto4i');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gsbg';

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
