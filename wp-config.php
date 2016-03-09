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
define('DB_NAME', 'the_daily');

/** MySQL database username */
define('DB_USER', 'zburklund');

/** MySQL database password */
define('DB_PASSWORD', 'Tiger0910');

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
define('AUTH_KEY',         'PfW)`~:Y<,gi5UR6p]b+tRz[d]w%svLN0T2~Zh=W8LFIQS}pX;|BU8&_MyQ@qX;v');
define('SECURE_AUTH_KEY',  'rUin@F1Aa{@9CAvWCd5$>Bx~fsz3&hTTg80y@zo;^eiN+,&8k-|3PW9^x1MD{Fk-');
define('LOGGED_IN_KEY',    'yY0<p|IK EAgjzx%-$xEXFrR/Hl3U)T?]z?w0HIh4P|(qpn3NO.)x}gYuii]~Ni9');
define('NONCE_KEY',        ')x(/rJ~NZM-;N<8L<LFNiK#5o*p::t~+5BK1v9?t2v.M]YT| `8h;^|Z|qy*K[k4');
define('AUTH_SALT',        '6F@ ~j+i&?X.|f!5[)O@Xeeto<E-|M_i#F<qv/{i~PPEMA(J#|U-XR=QFhC5ZF5-');
define('SECURE_AUTH_SALT', 'Ti<pd09p!*plM;>/%`2R<er`R2rf+CY-uuVN{T{)-$@2I/uF+Wzc0Fmy8wp~W3]8');
define('LOGGED_IN_SALT',   'Bdex.CWA;R]mc?7SD7 BOhr8tbsX>e@), hko{5cYTv!A?-lOqd.t[,*.Q}I?Hmx');
define('NONCE_SALT',       'dO]F8I<8P=LcN2mr-h]*+FN|k+k:a|Kbud|k,^?HHvH2-/n w.pm1mq[:j{gu;2:');

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
