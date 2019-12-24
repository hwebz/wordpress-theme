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
define( 'AUTH_KEY',         'W*T=PJT~_eL;NF%~7C1[Bjw@M0^bj*Hy|NF*kENW>1%?-q|FZ(m6&ad-;t){i=yf' );
define( 'SECURE_AUTH_KEY',  'W|)83vKE=|c?1;efqQZLoT&*q>D^:skR^YGFEb/1^5@Om9V%`L@F#o>sH?#?N]aa' );
define( 'LOGGED_IN_KEY',    'T^D%H]g6* ]W%N G&[h<UG&&^dqaLn|6>*jL=>vc?et?KoUV+QkAl#2b?@%6au~=' );
define( 'NONCE_KEY',        '0R]SWI!vi|QYNwhPlWB(XewX+*?Kuqdq.L542NL[gjbp9ek].VakNz/sE65m%QJO' );
define( 'AUTH_SALT',        'rn#CzO!u7nFyWkT1C5. ~[/@[>WqVom):D%<P>u8YU Q_rgg*i.iu:!,uDP_.AMH' );
define( 'SECURE_AUTH_SALT', 'G2v`>6Zcy.l7Xns9~/Vi4;b=8ulD`!kQ)$VHmDcLi%-A%h1qcxmJ[,~A0|`M$k,I' );
define( 'LOGGED_IN_SALT',   'iSg qCFvpJ6RB]@Vw7bOqK{0RUK~l(?fX)dS1dLa<wr8mX&WR3N)pT!~Sa#c8s@I' );
define( 'NONCE_SALT',       'Fh@J^Nv;sD-s^XT/.2|;%72gz+=M&wrowa pk4YQv-p63l9S;O@EbDSXZga3zSrk' );

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

