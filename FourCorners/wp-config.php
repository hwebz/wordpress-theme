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
define( 'AUTH_KEY',         'uz$P[j yQQ#wIS)2hBnFIu@K%[iJMx-W&c-xy_nQMZr](+DO}EZ&9Q^6)Mgdom$/' );
define( 'SECURE_AUTH_KEY',  'siir~ouU9g6Ud^er1~VjOTY>1=VPV_brF=W<)k-CP6HgQ~9!~ZZ&I5uA+= 0g<$^' );
define( 'LOGGED_IN_KEY',    ':Q87P}%IL9sw830F&Fs1pvBqPd^wZ<=` vykpg,#7Bf0hE3>BBOEV `EPzasq&|U' );
define( 'NONCE_KEY',        'y1x6zq_8P1mS-1}Z^ANb-;gh.#3V:FBXXx,~nQUZ8T^O?Jtg$v]bs9CxA!s.|Vva' );
define( 'AUTH_SALT',        'y^-NeJ2.`?a@ G F4)9p[)(KBbKLFn1B}%cz ym*e{.JL7Nl(*%4.2@i&&}F=%fz' );
define( 'SECURE_AUTH_SALT', '3b2$7l2z|T@C:$1!kKYwyKT 7 m@q~+>9^fr[n4Qkj9K||/Ro:Dnxf n^~&h-pF!' );
define( 'LOGGED_IN_SALT',   'c=?nD{2ZL+Q&d^_&#t6VB)&^eP/(`]q[-mwYK_yC+f7sz 7iR5DLQoV8eP./03SK' );
define( 'NONCE_SALT',       '_{ 3radG)8ww2(fsQC2o:^j#A0^VY=p+eB?O{H YzAkl GC7%P$ncB2<&b &&@7f' );

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
