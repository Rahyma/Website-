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
define( 'DB_NAME', 'abbasandkakar' );

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
define( 'AUTH_KEY',         'Iwj_%AW/ZQ(,l![+i=CSa0JUyx_zBMulCj@xW.A$%_(Au76+=xi3Bj-0-c82^H1G' );
define( 'SECURE_AUTH_KEY',  's_p&*aTEIS((`6d1Ev=qO/.+jPW?M R_9de<HJH~PKK<*^)@u2C(MMc{T%Hh6Fdp' );
define( 'LOGGED_IN_KEY',    '5Pm|eO{#BgfGvJL2qV!mBV|#i:ldl|Vc~0[pK[Julu4SD{@Z}8LWlHf^1-Jj?s?R' );
define( 'NONCE_KEY',        '#.~8F{TnM~qL|VH[QpV4T+&9RNl,,+9+AnarPp~)e`.u2Mg9ouCRng7y]4 .a}xB' );
define( 'AUTH_SALT',        '9A!Tw~t]@kq,^iq#Jdz2K5+Xg%eo07a)9R@Z$?{$r/2[6 !CZq0;WRM2Xd?KR%+6' );
define( 'SECURE_AUTH_SALT', '[2~Y>b]^G3L}a6NA.`U6B 1*hGP<{yr<-tHMy*0@PWin]B@+v0 (.*c(9(&4Iw=p' );
define( 'LOGGED_IN_SALT',   'd$Q35C<2$7B!L hE!!+6/Ls#ale0IOX=C5t+`&$Y0*Zx;j@G%Q 1BunP?M@V=puT' );
define( 'NONCE_SALT',       'z ldl!#s%iqpXH+_M}^:nW:TP1!xPVB6mc2e^Og(ST!No`T2l,$]L:xIu)Jts?KY' );

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
