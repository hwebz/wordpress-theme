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
define( 'AUTH_KEY',         'b>)O[3L_D.d~Pj0k&l#}~Rt:OV`37V>G+c~cxVbq.WpX{,5%R.r]_[HAYO1jEt]#' );
define( 'SECURE_AUTH_KEY',  'Ew82 dTZR7rav*iHo!xYb3+DX!Q44jdq2%?Nm/`EX?nDF`io]}61;ZfDB<,?bUI3' );
define( 'LOGGED_IN_KEY',    'KyZCXs,UXo[sPA(P!W@BI6*h9tHCv)S6.!t3o;xwl$#xD>JeJxt,4=9_Rk|.4ipH' );
define( 'NONCE_KEY',        '_T2f!(K!f50$F,H=-3t]B#V,I}Kc@).o!<_zvihZcp4n#;m~sQ>~pHv@>Eij[X??' );
define( 'AUTH_SALT',        'QZ` i>FYkuY]-;Z}~2p2e)Z0I3UqJ]NLXBX^y1Z=v*U-/#buSWLf%F~l$N?F!k-g' );
define( 'SECURE_AUTH_SALT', 'rW22OL5&/QMin88?g}5ATo=w71O|:-NVwO102pWTARNEAX`mef l5$AWBReFE:)c' );
define( 'LOGGED_IN_SALT',   'Ke~HLb3X_8Kq*Tx&cOx__Ks]3%9qHFnDcWUlkeR8dICMJsu5=+rf&@n0i?RB*?M$' );
define( 'NONCE_SALT',       '<y-w)Lo>ffO[:5|ih`~M+5RppQ/R}vr$o1;r=ve UAk+)&4@&kPT{`iNu=?2,%Ph' );

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
