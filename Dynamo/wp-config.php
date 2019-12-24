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
define( 'AUTH_KEY',         'h%m7(-9S/2DwTzpBn~{]b$Im0)H]adJ|mH#$iY{31os{Mncpwx=n)*rw-.R;L:qB' );
define( 'SECURE_AUTH_KEY',  'J4xp(Vb2!>$qx5tdYSK9j7hT6VA?KMS0#VRO]qsd.V[{U_5>HvtG/LcFL< <53Qk' );
define( 'LOGGED_IN_KEY',    'Qt+v^2F=c[Mv_l@Ro7xVrij [s.gR?N<?K]<FpCy.wzF196<QGT{0%#$2z/7fr_b' );
define( 'NONCE_KEY',        'PlLg+F7>@:pR,(gbc^z}svcIPHWZl8n+Z{J|6ZX8AZ6OZfNno:;]j=pM6(GK;tV=' );
define( 'AUTH_SALT',        '^;8&)!,GD2e-3=(zdosQ(wfGhBCo9yCxDPATM5 de=gzKu[ubJ;(VdTd1fO=%0s;' );
define( 'SECURE_AUTH_SALT', ']4N, fxT7XTN{bYj5d>*.9~(Sc&^Z2*R^yJbx{DNqugIAi/t:jutf4iI<k<y.jaO' );
define( 'LOGGED_IN_SALT',   'xF#a+NRf<zJ.JS1u%vQ~@wvy)J4&/MZZ(q4(![I>LN`DE8}#!FgQ2KfT(L6cSFtI' );
define( 'NONCE_SALT',       'Kh^ur+DLNJz1Mi(sa?P&h^T3TcvzlJ~s~u*FEP8i~0sSXAw4-?sp6J37LU.=;Umy' );

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
