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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'rn59I$>AImM6^|TUzGVUgp)!|>fb[txTux%]B>Eg0I4XNh]*a,lduLKS``3<WEIb' );
define( 'SECURE_AUTH_KEY',   '#O31*q/CXd-xitllK5}tBQv|qeHPwA7Z5OFz4V#@GO6fF2^Cp#WyE@NI-g|w[<N9' );
define( 'LOGGED_IN_KEY',     'X)hji.*^QEyWq6!0H>vYCZm@%my5t<.>LG@U>;v(wM?^}wCW|;0K_DKSC^O$CQqF' );
define( 'NONCE_KEY',         'ab1T@k/v&aR.*1KOJ6g+zEx0gthKhRK[%Oc!gF4Al4`7qsoyJB6QRFg32!sAQ><5' );
define( 'AUTH_SALT',         'F,t&pZnty:&7aZz>tRQH}D-Xg%`lxfBXnqLHgv!z=jb1A6f@`j?/o$qjCT@3,1p(' );
define( 'SECURE_AUTH_SALT',  'S0~R0ZZnotT3Ow(j#1@A)_0z#^AkqPu%<7Av:17=)OAug[CC<M.xP.s?)mg.( C(' );
define( 'LOGGED_IN_SALT',    'T}8aK[1z*PWhw+v<DDVUI44([WiZff1CMjWNCU=1$QC{q^ww7UkE2Lq4+M~wa815' );
define( 'NONCE_SALT',        '$~@N~J9s! J$n5L7OOyVG#e4r51E+)HXi}qUhCr[)kh^(oX#J*Y7=3C64m&N*CWB' );
define( 'WP_CACHE_KEY_SALT', '0L+e}1oN8&![9}Ak&(dLE@sX;S`ah$~G:s)zp:Gus3~cnwYi`B7VjR#v>8rP~/}y' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
