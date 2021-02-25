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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-react' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'x5qh4D[1Y|g>(I*_.:iTqKJkm]9;;M5QNyTP2SS.:e,zEp&T&PP3M`V1M:ujB)Ys' );
define( 'SECURE_AUTH_KEY',  'FwS)SS3)<@UR5KU#9o5v-%(]H])oXTux GU[uI_`^P_*m.r_.hK;ZpYJgOY~}K[^' );
define( 'LOGGED_IN_KEY',    'aIq4{YziK(4dHPF:H[))E7z84!r`|iFvq!tjd4HKX4]e-i}J(C~1PskqXM$@kac{' );
define( 'NONCE_KEY',        'dAuIuM2 RaE~wWG9W5fIy1p!l>A7pbntgFC4TYfG~Of`fWOy<,Hnp{Uj-}Bk_mV9' );
define( 'AUTH_SALT',        'o>z.xH`v`h288}KP,tXv!X@a /Hi MJRGXL]T~reyMyn`XT40p}{Y!6/F.[(2QUT' );
define( 'SECURE_AUTH_SALT', 'jx]~`Gv~F><9*Kjs,6Y^67ei`$OAS)wz2<}dt5wl)X>~ oybr?9AR2$i`X,GiE6:' );
define( 'LOGGED_IN_SALT',   'liAt_n2R6*@y*$_?CptT)6:=UayLAm,?Sd`C7427oc5N_3biiqp}J`i0AYl=noI,' );
define( 'NONCE_SALT',       '*cX4@mq!+(<?yjre#=b#_togX;-oRZ2@rIE2`Q)%PrgbTR;_yjQRdc0,Cl;n^&nB' );

define('JWT_AUTH_SECRET_KEY', 'secret');
define('JWT_AUTH_CORS_ENABLE', true);

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
