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
define('DB_NAME', 'sarathdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysqladmin');

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
define('AUTH_KEY',         '5>q f5al`V-$qD8;{*-bT.`h[rX=/:uIqD^L,4)M$f;os]9?k@yo;A.IP3hjV{iK');
define('SECURE_AUTH_KEY',  'SPZ:$NblKUr(&8#bxDBR:v~MFe4~eL8MnH]<-^#(8Am^#L`U8/^I+rGvqK-n{={]');
define('LOGGED_IN_KEY',    'M}lS7 ud--o$}b)lN)ef.fHjFoq2/AvKLWdK&/VZ !F3RoeWd^!729+D#+%9OWN_');
define('NONCE_KEY',        '9xk/B({VT~=JnZ]LqzL`O[XdLK%l0ZBx$MJJtV/MgRQ5MIPLg{<c&/^tvPDhR3yq');
define('AUTH_SALT',        '-%JgnR?of3sy*W_EcSw8-Gf4jP(bz(EB()2|YRFr1&FCqk5hY2aQ42xHi1Xs9EVC');
define('SECURE_AUTH_SALT', 'e5bRi#@[f,orD?OYoeY=;<Ka16:m|Bx-b:,)+sjgV~%j;}L2Z K6x![!;.%6(hK6');
define('LOGGED_IN_SALT',   '&PN4aWE/40yYzv4p]QjRNf3,C%sYvDE5Kh8B:?+]ek1[{1]kU(J8&q(S|gc@%./!');
define('NONCE_SALT',       'qmcts5%3WGtkB  ns!gUzOvuYIl!h$NWS`V}wB01nHK<O6%$L^6u-Mn:aO?zTBxl');

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

