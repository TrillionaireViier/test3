<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'SK}r+$;CnKm5%MO^SJYx?x-h=P@7}%U+O&R!^D2@C}YWOt$_G1o6gmQ~i%QrU$d_' );
define( 'SECURE_AUTH_KEY',  '8^E/R;~vzkN[a_z5hSVHFpE:gM ZN|Q9kgaYfbE_*aFmv&A57!j59>!``13]=+0Y' );
define( 'LOGGED_IN_KEY',    'QvM/h2zYH  7^rF-;*4`v0CsRfbO`{}[XY%s;Vp|Q<e_>2iO5Th(x-5vHT;Ye!xn' );
define( 'NONCE_KEY',        '9isZS1Y`T.&Ut1=6~l)?EEN>7e+(??pVP]`)X+`H.?4_.@*!7zhvbr5,Gc2%evby' );
define( 'AUTH_SALT',        '1e!kLmj45OJPYkQ]}!tS@]up=zqFoyT_CqCt{h,crw;E&=h}aamT~;6QnT=iXq-@' );
define( 'SECURE_AUTH_SALT', '<n~E#Bkzz.):~C!ZYw)-*N!I[HjMf#J,KwPst299E^XPP+<hQB@HCCfQc.?|N_p7' );
define( 'LOGGED_IN_SALT',   '1ax#Z(sUyG7g-be2X$_?f1:qkKDZd4iAnhrpa%L2F -FJH!-9Av1=sk_fHn$;5hF' );
define( 'NONCE_SALT',       '!~-~&Bfhf1K]4e,MI!*hd&Mxgc`&==T%4yOi#[ex{!$c>i^izmH~_$p!+#[{^pYw' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
