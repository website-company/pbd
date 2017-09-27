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
define('DB_NAME', 'palmbayd_wp');

/** MySQL database username */
define('DB_USER', 'palmbayd_main');

/** MySQL database password */
define('DB_PASSWORD', '5i)JxtZ,7O{2');

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
define('AUTH_KEY',         'O#y_8tfrYWaYLgzM##r@-r}EK&eJAXY|#Wk<=TE8a]Ep9dZ_Z4sxEP33BdioQ`d6');
define('SECURE_AUTH_KEY',  'VS9;%:-6m}&~GOm3edy3*TkD3vsI<?tXHx}AP2a=h#~:QN;[f51aQKtOBuJXv:H.');
define('LOGGED_IN_KEY',    'YTAQ9sdR OHycdRHoVOz=LQbk+k;xz?/G;9noJ;Q}+USTF21mya8l;F<ie3Gujo9');
define('NONCE_KEY',        'sg+3>yR@-mLTK3u3BX]q&yZpGS/jx*CT%:]`}pP@10tAg4.=;&Yxx(Ln^O$,N$hj');
define('AUTH_SALT',        'S?|,<6OEe@g/&]L[n5<C>U.KETB14[h#q/I5h2<]]koEu`Qk`VTm? G$muR(gzD8');
define('SECURE_AUTH_SALT', '(p4`|MelSzrI@!eug?=Z$bZ9t.X@([47 aEAq50V4O$=8$We~;m-fB5.]&e7VfW-');
define('LOGGED_IN_SALT',   'C)J3s|?upMttdxX ;42LI?NwSRO4|z?Fv5d $N -?.@lDX$iOzmIfoesXk!wjGGq');
define('NONCE_SALT',       '5phVCe:h(;Hq(1/:e]^wH8]({  Xuf>gpXv%t*Gs!hiejncNWdmOv8g6Zg4:1T?)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pbd_';

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
define( 'WP_MEMORY_LIMIT', '256M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
