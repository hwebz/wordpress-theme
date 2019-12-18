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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Admin@123' );

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
define( 'AUTH_KEY',         'y^EwO_Cm$;FKGQR7iW(<3`2@VKAl83S6j.F2R!bUH0R+Bx0;Wo#i>:O6#Rf@ez8D' );
define( 'SECURE_AUTH_KEY',  'Zlf0/C-i2}aS>B:_#C$s;~@_}#XcnKgW@0?Gc8mzxO1<}|k9T~<7iziVFg]brD$@' );
define( 'LOGGED_IN_KEY',    '#CVH9:vp`KqnU^qUJ<Xjz2o_&bvQcr(;1|wejA2YFH=!i5sm!8,&[?*OqL]bC]tY' );
define( 'NONCE_KEY',        '0YFXUV!n*rq$c$!HroHemR=g<*OXK,k|xr?<HIMTqzOZ>*?>S5sf+kn~IHTr,[J~' );
define( 'AUTH_SALT',        ';kR&y[!xpY^eJZ<0+:yEw};`@]7&kr+:6zRbN)>a>}BY%EY%[:gdJ)V/E-kDw20|' );
define( 'SECURE_AUTH_SALT', 'asAHK>Dnr6p7>tOKWz~Y`%lI,<jD&7:)F&>IE-s/#1Az$O 3(h(p~q|mOMp]`,7Q' );
define( 'LOGGED_IN_SALT',   '.qO96`_^0|fNhY~jBMtN=S,mX|lMV1ivsJBE$&jm[;M!x2C{%e*jWc?@}4@L[P%=' );
define( 'NONCE_SALT',       '](hRmLuTEHoe*}QsmStlr41Rt*utcITA^B,SZd4N8E2%LdOx~r<[-H>/bDeU*k|Z' );

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
define('FS_METHOD', 'direct');
