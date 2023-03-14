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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'woocommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '9}JyNuBV1!!^~jTsU(iR-NTR,qp*CvycXE*@x4hMsah(X!f.ramQOrREYxjagv`V' );
define( 'SECURE_AUTH_KEY',  '/?owM:#h.CcD97PmY!F(c&lLSf?Vnec%(^9P[{9>H,W00Mjq^>Xrq7q6%:?rk[XM' );
define( 'LOGGED_IN_KEY',    'ND:Km7(RUwOwuOsg?Cz;8O63z#{vB+d2/8;8~+|Xw4N}YZq&[9`[nQ~?X?f(SksQ' );
define( 'NONCE_KEY',        'hKcD%X]yYp/JwP~Nv#)Yajj6td!LR/G,N5unC!E-ph$]Qp.9H+phR~8%QOe:EG!}' );
define( 'AUTH_SALT',        '8]A0^kk+-0I~$KB|amP;1wp3A)XB/fy1<:[s;OW=zu[r*P }s?1c?^X5,oED0rIz' );
define( 'SECURE_AUTH_SALT', 'cpw-Y|B;H4L(?*Eee(2 53/!(+vP#?02UibgRCAV$WRLsuZn 6u$1VJ5(6uo~+0K' );
define( 'LOGGED_IN_SALT',   'a$&KMK^0bF&ly~eWGwK]?82}5K7s,&z={%T+)t!)blS$Y)&$X{?yp.KH%;atb*S!' );
define( 'NONCE_SALT',       '3?}g#n(P>9L]F<Dh1%C]]^E6t ,ZYthMoIAd{f:y<nM*h<sjnZ}rvnIcojoXw1J4' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
