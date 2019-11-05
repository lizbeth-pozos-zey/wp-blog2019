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
define( 'DB_NAME', 'wp-blog2019' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '511ddf1fbfc68c565f00a02f34e4ba31f71fc41453c358dc' );

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
define( 'AUTH_KEY',         'U)p{h|0y:JM,WScUlA8_#Bvof^|=9fv}zteIEwxzR&CJSvjrtg-Rf*-Qu]ZCq$cZ' );
define( 'SECURE_AUTH_KEY',  '2nc20z4Ms%-j>4W0prvM!0u(Jj0CVm9>Vn%3;}E:/fbdCEY>up;*!ySNf=(v@]e`' );
define( 'LOGGED_IN_KEY',    '{Vz^gsdE;/?(U4lE41+3p,HYkD JKjV% )o_)-X!$GNHEL=Z/uH#yii6Is%4!OI[' );
define( 'NONCE_KEY',        'B5V]x}]ESqv5AT4QwMbO4AV@N@VJcJFth?Fs{9Z~P7[8vy[.l5*:mddm9t|Oq%&W' );
define( 'AUTH_SALT',        '$LD`9@5PttoEzahOmjaoq:@}lMlU%J!*cp`R_hcrMwIG$*9z_1Ck`)bjL0O+es}.' );
define( 'SECURE_AUTH_SALT', 'nB1>0>m=Tk~@HFAv*lBu-V->ZTf6^]56M#5:Yh$5L*TZz8pt_z#TGL5a[9~pU/! ' );
define( 'LOGGED_IN_SALT',   'O{pQ+2=hyV&2EX[PC~Dtp%HmI^}AebrF7R:YYx+mw&lK9r5t*85Rfp3F2y6_}Lhd' );
define( 'NONCE_SALT',       '>,)|(D$#`C@^s0Z+h<~E8zdVyQe Pt]8kT|UW]Mkx|h@>O.b<UxF}+%oY+,@elWA' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
