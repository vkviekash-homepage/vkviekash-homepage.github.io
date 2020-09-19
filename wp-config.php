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
define( 'DB_NAME', 'vkviekash-homepage_db' );

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
define( 'AUTH_KEY',         'd^hS6O|HE&;9+YJ(@{XS!0=I7*-/V@Z*>Xi|`d2s[i9@o;99^z+(-r-)^d{7~=4t' );
define( 'SECURE_AUTH_KEY',  'U[nkoFaoXE+Nw)er4PqLg/s3}obGr|^+&x,bT&9=IQ0K6_YDw,|NgYwi^EJ1wl~.' );
define( 'LOGGED_IN_KEY',    'e|iVZgfon]0X5296>JZw7&$D2X<16 l[8t;f7:~1!<4r,G:]yI;UW,c,2Vy+htt9' );
define( 'NONCE_KEY',        'bNzp7mm2Ek[vsIAr,{8Q$rk]}dt>ksw`vfMMgDZVppAPPa_`PJo]S>UDjkpJ9YAS' );
define( 'AUTH_SALT',        'KT{C1H{1lN5_(bB2i=`:!X[dMK]b=KS|hOQp!$Ggrxm4~7m}qum./*s/D5VK,XK}' );
define( 'SECURE_AUTH_SALT', '*Q36WL[Y{6/TH4w9Az:z[z3c3<}okBa9q+#m{Rq]gRVD&c!W;CmYkBH/-@bv}{o~' );
define( 'LOGGED_IN_SALT',   'N2?&;|?aAEuaLC2.9Xb`T,+4_B(n.G3#r)8jkkseN61EjUFrEOpp9..AD^Lv{MP:' );
define( 'NONCE_SALT',       'tgIb0D,eq0>/dCAm#!*Lntd572-XKDQIa$-2_{{$fBhWF~4w%lP=RNfWjflOHLn.' );

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
