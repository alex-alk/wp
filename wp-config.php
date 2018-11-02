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
define('DB_NAME', 'baza');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost:3307');

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
define('AUTH_KEY',         ',p/K!_<elO)8Fs52^<y(f=H9<4tMAobE1,uWv,@MOmphM5ya|Jz!;i8OBS<1nq+d');
define('SECURE_AUTH_KEY',  'Gcw|T;>Ol}es~R,*fRbIbi;LeT@L-`a#Xtovqk:OsgCuGM1jvS|2)D4DGr-rAX *');
define('LOGGED_IN_KEY',    '-bK|q=uA?m|3U%clGgCAUFo[NYAiWuNE#*85flC~}]Kp+-0b6fN(QeUm~#O-4+$R');
define('NONCE_KEY',        'BpXGlm9 d8g Y<CYf>o?/F!aM gCOMCYY|fa*w#X?Oerr)14dT_( C*w{N<vW$Q~');
define('AUTH_SALT',        '$Yd~r^tkV/NXj_tGA?WvfW$?|w1e%Z+;vr4sBTL#$-,+[@YV9xXx&+Mw3dH[cCkr');
define('SECURE_AUTH_SALT', '2Chhs8<FKKL+wFl@} H%=Pa*1;|][1Nr`m];SXSUGwa~  @VkG}30D.!,*!Aq+kU');
define('LOGGED_IN_SALT',   '~$>8]i(f#+deucY:z=eKSv8f|3ISWA(F%ODQPYz3LqqGd1f6dpdJidjH-HnB`3F/');
define('NONCE_SALT',       ',%,Dv1<_2*YFw9v:2#ItIAe;ZS,gj/A@b(&Y/1#OuJuoW#*G6ej{|[cJtOh,+y_J');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
