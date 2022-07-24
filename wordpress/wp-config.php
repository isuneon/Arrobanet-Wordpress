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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'T2 T$Kk2Il!C!k;V{St4kf85Pr1{z7>=`7h| tUJ^<P Rs$jY$;o~]-x#i@ZE0<v');
define('SECURE_AUTH_KEY',  'J(!6}v CL+5O=_XDrb;di8[Zt,5.DI6bTL?kB)ID(6mxY9J?_<DRt]&OJf:R@o?v');
define('LOGGED_IN_KEY',    '(`{jyF1DeA1.9WmkYl*Q6h1Ikpyuzt|dJ2787P^)0Vf/mfv;L;4&]k= fNO-2DAS');
define('NONCE_KEY',        '~5W.-z:]*(E$cR/*Cme@dKqQyG8p{E4ge|Xm41iQGC&N*X6dW#LM,w4Erwq78X-H');
define('AUTH_SALT',        '7tpZo>0`n8blMMwN]zQk1WmOM}iLNku(q%Zjmx|+flH&$=7bP~-5t;{:.}f.t+;m');
define('SECURE_AUTH_SALT', '`Xz6Gi:[(i{1uGf-x^R;)BknqjNVH^Nty[MM%The>;2%Bj1Ef*m:(ml-CV-IzO0`');
define('LOGGED_IN_SALT',   'XB7kzlN@8IYS.iP&2Jmo:5a{T4ov1/IlxNH-)Iy{Ln0kx<eHEH<oHY^L*}j^]1+*');
define('NONCE_SALT',       'eXZrsGB?$M6UoOvfW.)EAbR46M}x>%G?bq*Gc~(jVK,>fr+bRAzB$e-9pHR>?1Te');

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
