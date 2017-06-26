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
define('DB_NAME', 'im-charity');

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
define('AUTH_KEY',         'KBtS*2`K)G7|.KW2hlq^=NmFi1UTwp3XZ*J]a3tf*T+s#.D5z`gZN1Uw1q)g~3b+');
define('SECURE_AUTH_KEY',  'c:@B`47SMxVE<ciJ9kKsIWZ`Bv(:=hL<6S.<G0/9/}Ft&6TBwZ?dOeS=6b2,MYF1');
define('LOGGED_IN_KEY',    '.a%/ZM pJ7Zt*9=^A6xj:Ha2aBD}_i9|;C`Bi%q}Z-WxSDh$WA,N]g%} eH@PORi');
define('NONCE_KEY',        '+58,qXf7^~YB PRYV>Vy@!FK</4FW9TeovS8Hk$*U/JaKt{^vH|;;wm!p]%80g98');
define('AUTH_SALT',        'cO(*~{L0~e1YoHXWXF/q=.4`MB<v(qS)6X9Tujf}7FT6gVDGz*Tx,?V8,SrT@b]:');
define('SECURE_AUTH_SALT', 'sOxX@,jmHe14=<;gZNw3|4JMhbO{sb|Ax`#0.iW!4,=?x73?5yD7/}ooef,]H@&b');
define('LOGGED_IN_SALT',   '[DG^Y6gTT6PVC*j&9l)odLzINSd[J,Rt;+D_bU?,>gh|QOFJD(4GWI>9|y0:oOiQ');
define('NONCE_SALT',       'kS>7x]b]D+)Z_2CH=tAl/;^fec`t%3V!:Mi1v>db?y3NX8ajMmzbb[U)u%`2I|f;');

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
