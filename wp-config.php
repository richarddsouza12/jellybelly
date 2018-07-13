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
define('DB_NAME', 'jelly_belly');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'c) W.3ci~lF;b35hDJR8UbAy*1CdB#kg$Z%9_US|]Od9D*!0cWjx3Zi]szW#~a)D');
define('SECURE_AUTH_KEY',  '3cMjxV.[lOOah|Z*QgD4Kp%+|QP+i`PVw3guhq<szy1v!;Dq7lrmkF],H6*=#l`Q');
define('LOGGED_IN_KEY',    'Y,x0qr1udUN}.&v#g%ZxBC<%bSA:1;dcsg%^KjaM{A:Kb11hDF6$TrMa//k!EnMH');
define('NONCE_KEY',        '7fYY9s~cv>N;~f*h7|[&Wp; *Qs0=d,p5/=](u2|qAn6;E[zp_ej n_V(I+Jpx_N');
define('AUTH_SALT',        'yD5:17tI;J|9vo[aC_UJLRRwVD{-i6g?x_toZLq&|{i<?qhI|<//U QpiZ`Oa}YJ');
define('SECURE_AUTH_SALT', '~hgwU+Y#7`#c,E4sZYg3wqz%M/S6T>EKDMq!3_FswA5#kEfNJEodNNWY%}jIzG8T');
define('LOGGED_IN_SALT',   '%njZ?NBByMx4rsdn~6FnJ:T/M_VpN8 ^~T354fS$d9&g%KX_:LZ$5>,fytkj@F,G');
define('NONCE_SALT',       'MtkO>A9Uv6rh+qD3K6;_VwR?zCa7D~pnCE92_*rR)d$i<iHAtvZl/w0)@[b >w;C');

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
