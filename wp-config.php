<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'street-la-mode');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nI@Q0w||Z?Rrv/0:#x>mZ&h58SPs$bA]KFVJz[igX^J[A[|i<8zJn<AIbEd]WHJa');
define('SECURE_AUTH_KEY',  'k8LmaLuv@Jobcd>OAB&|,Wl*F58r;A[s yoUH{iE*As,j1%gLD!boLS(<P[lQ$G=');
define('LOGGED_IN_KEY',    'w[p(`s$0Bt$rCT^m_#%e>AP^hG#x->0K;$Omb}v*m*I}C?o/Y{ke}5Z^=@88!OsW');
define('NONCE_KEY',        '3xD(kf>~}^)7dXaVQo>F33:j~cxX}$Qo Ja]W2Qn)i6wI3(M.P0>T0:TrI6jKBEZ');
define('AUTH_SALT',        'p^?-w/yz-[i5h/<D}=h)p8E|[}6<kpdKEa?$;MDd[|MM^YwwQVoy}+f~fX>!GjSU');
define('SECURE_AUTH_SALT', 'd-c:zl-kDs:fcHxejlh,bBFvo^)w.m;^FO<bV!9KjlYfJ]00A;R(r6&4hX>^lF H');
define('LOGGED_IN_SALT',   'pxi svn:UdA#V2VGykmV?Gu3oqCqV#]{2dA:#+|x)v/>O37$al&f~/}N30V!IUG+');
define('NONCE_SALT',       'kziZ`CqUa+*R78a. ka2gQV7kZRI-CQ>;Q/QF^<lb,Vq(g/_=Yr>R)(0pdyl(zcx');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
  define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
