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
define( 'DB_NAME', 'cymulate' );

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
define( 'AUTH_KEY',         'rU$BG*XY#>/dn?ntMG6ETxPpbl(gC,2s=Nc|UkR>I?[:#d2]%/-XB#K!NNRxF.XA' );
define( 'SECURE_AUTH_KEY',  'kL]@kV_X3SYz]FB1:XqzYDSFp&3xkh26w(/ Ip@`e:^;B9t.D8-9_pVg7S#HI5(_' );
define( 'LOGGED_IN_KEY',    'Y?1Uhs;yp)#P5=$$0=kgzXOP7~iY,6lrghu=+@edxzdNHoXk,=iSG>tNOv j7D?G' );
define( 'NONCE_KEY',        '8Iq`dTyG|JL^Fa$x>&6u_[2(7TK?k&[GGR7U~W)RCvfQ(3)j@uRbvd|Wy/xc66~7' );
define( 'AUTH_SALT',        'UpPK]gi~$?.Nv88G2x!<dP[QO`3|Vb[RT[Q+<Mr2]*0l[Q25j2?=/%quFPik0e,c' );
define( 'SECURE_AUTH_SALT', 'kK^CXhrEve(l8MV2`y)reHll4!b{q,&^e}O,ij=/@SQ=]2]3L<]LNaH7qTrw53`b' );
define( 'LOGGED_IN_SALT',   'eyKP^gX_5)v*I}gZJ7#2v1M}F%2/L$,F2Q=Wsu{+e,qw P?rLFHYc |w-vo:?#Rp' );
define( 'NONCE_SALT',       '?v_,*@=y2Yg|slk#-1?RfFZgG<eFiyRs.7y=Rx*aqLC^,zoH0N`*FmE84e&loU6 ' );

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
