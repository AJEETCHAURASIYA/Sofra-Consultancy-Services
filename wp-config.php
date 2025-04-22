<?php
define('WP_CACHE', false ); // Added by AirLift
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u112399693_jOaIj' );

/** Database username */
define( 'DB_USER', 'u112399693_0jllZ' );

/** Database password */
define( 'DB_PASSWORD', 'UllsGulE1O' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '`)QmWxRLSeu0csq/i6$J>=Rqhk:;8_T(xeGMM-uox7cf8!=r5C#eL4y2~dA{`xf}' );
define( 'SECURE_AUTH_KEY',   '^_H|T`::<Xn1s:Azx%Zus[P^*<(/YV!(rH^x$dT~E,*g.Z+AfmqwXFZr6TjJyd5+' );
define( 'LOGGED_IN_KEY',     'fHZ2J?vcKmbZ]f<&VO$gAF~3Gip9:}CfPQ9r;khO=SwaaIX}D2dLaK[i`4kH0%)D' );
define( 'NONCE_KEY',         'KTt5]0*Q)/OF,CZ!fdcwB+AO7!d}QJmG53x9[rl-56(eg2r{mMj2uAQ:g;i~cp#$' );
define( 'AUTH_SALT',         'C,9])bf4{L$b7+GqpIQ%5<m$@#_rbO<1~Kbwk[zl$`<q$zmB#dg7RoXg4z!ZM^xJ' );
define( 'SECURE_AUTH_SALT',  'qw)q%U*i%)jc]h[ve!.~QGnuxMw5{J@2lka!mCjG<U8zm$@vg$:)Pr43aoCCp3X?' );
define( 'LOGGED_IN_SALT',    '?L^kyN%Je_KwQh+S?;;<gWy7M6fS[C_17MuN`P;UO/bU@$5]dH9?I-LSYb[bOdS5' );
define( 'NONCE_SALT',        '1:QOfu`Pu/Gh^%YEB V:a@0v=PRua3zMC!}ZdrDnz(y+#46VS;24=@Jl(I}jIBs_' );
define( 'WP_CACHE_KEY_SALT', 'u.?KF6bgLH53I;&b]:C%?+hMC`EzE*?<p=B=:YpTFbapNC^Q-la]J-&?K{35X.9*' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '3c44a2fa8805a951faa8e48a4b2406fe' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
