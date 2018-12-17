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
define('DB_NAME', 'sparktAi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         '$l,$d.zTo,/w-{).rr-6T}o%Xe&DdD2`2uonoQo;>8,nJ:C7p2T^5/^kzaqyRo-=');
define('SECURE_AUTH_KEY',  ')=vq>/-EO#n6Mo0&W@`1(5J=#A>11u86]`$v+Htb7`L.@naet0<H6gZP{F>ab3h[');
define('LOGGED_IN_KEY',    'h7sIDVspStqd4la]Lv$k6SUiq+?$2jvX]]je<t:#~)@-A[fXn5O*09:$3bLRWVa-');
define('NONCE_KEY',        ';hz3uLu@r9]codg[|MEfQ|qbm&HJ9gegO8+k+Fzl.]ctfq]*hSQ.Lb0-.>.hy)s%');
define('AUTH_SALT',        'InAsym#9A-!]-.6yyQ*]| b}QG$YE;^r=D>cd:D5M2(,Bwf}jx76[H<^^btq&%`-');
define('SECURE_AUTH_SALT', 'v?;m$~$v:7NM-jMMeZlm=&N&BGAaJYN sCg*g|U^@$K[_^Q+|pXqIoWQOF!*2%T)');
define('LOGGED_IN_SALT',   'OSCFKLQ4+Q<G]K9{M^e8q.GBd/bRq)Gl:e_UCf[|X!(RXRdf-k38tP`Wx[cWC`D$');
define('NONCE_SALT',       ')-Q$.PJv/CgNYyEibf:R )Z jon<@9:cpV]qC;.H 7khh6#3)omc+Rm$00]fw.{r');

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

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'sparkt.ai');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
