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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'BJo%$w}r&8XI0+Xa7~=-xeFPLgb6?9;5vaxJjxl=Y+u)Q`KVPYsV?7A|[xD#wl,n' );
define( 'SECURE_AUTH_KEY',  'f;D%wNMSl9{~qax}&p@g/X`[9iIkQWp^#My`D *!H.ED(N:3f[fnGZwNLg#J`lA_' );
define( 'LOGGED_IN_KEY',    '^!m^/TH11fzHTeH[V6&R=][JG`.EZ=laK^Hh7Eql&#~n<x&l>Q2^pxM)J%m.0SVa' );
define( 'NONCE_KEY',        '.#`sMNPRNwjh4~~h88fa}K|^`o?IUKZWhhTryF6j.OsDfd%| ^fEV;>*@`7i$MK&' );
define( 'AUTH_SALT',        'L%k*G1nS@D.(Y>pAbE-+$1pdE;Uokiiu9GGn$;3vEop*-K7o WjBd}S,ySi9xai7' );
define( 'SECURE_AUTH_SALT', '%HWOI%x)o>B}iw3=A7+|p|v=j3oy D>+xu=H2K?}E8~yi;|7jgH HpI/v7c@!`P}' );
define( 'LOGGED_IN_SALT',   'c42:<(7y!=Chfm+1.;S:Va}3S_)LhTTM-,*mpv~@v$k|8x:HsFW|35gNv`d!J^> ' );
define( 'NONCE_SALT',       'zu.BsDl,%FiP*If!N3]<_E7hz/_;F+p]c~kb`OV]In~$9*(NkLLD((<%2_ VxR~c' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
