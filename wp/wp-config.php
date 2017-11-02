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
define('DB_NAME', 'code404');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '99aef2db9a31aceb1130f5497117585e39574824c5455168');

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
define('AUTH_KEY',         'ffcn3cPb%[u1RXMoTpLC_b/{ZD4|.+.(e7CJ,G^?U8rDDmhPqu},Z%6Qt#lC,2)+');
define('SECURE_AUTH_KEY',  '6teS;}g5~y6zI47rSa9$:;cV&Z3G}W~p@n/5H= Y DB@oo<{!acB[5dS>^zM^pR+');
define('LOGGED_IN_KEY',    'jAP;p=IbKJz,/i924LSb.lmY:ESd4@wT}i?C*,7!8v;^(LCD rf4R(ng+h@nb_W[');
define('NONCE_KEY',        'WeG~7|QJy0toEb[BAm19=T&=J6QqwY|<(5`.b/XD@q7)TdIE|_Xw_CNWA-57Bx#s');
define('AUTH_SALT',        'f:oN1AxRmHiEd$h>RL+,^D96_:y|[v2w3o)/jh$VN)h 0AjIT$!SQny4u5Zy]h4e');
define('SECURE_AUTH_SALT', '/N !{wELpHzE}n-3Ftn}#jQ}jpoFF*m[nJ1|fw+v}4O7p%_gHvnP%SU96[}>AkCJ');
define('LOGGED_IN_SALT',   'K{4s]TLjl}_U{Jju=; 4/[t<HINV)iNX-bmd]}SD3i6Khhk#~Y5H*])LWgLpswj9');
define('NONCE_SALT',       '_>!Rq)A^=g<,ax&RrWO[%~?yedRVhco*5&5gK6P]o-sdO8p.@>A4ag+%D|)B1|aP');

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
