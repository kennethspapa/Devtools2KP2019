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
define( 'DB_NAME', 'devtools2KP' );

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
define( 'AUTH_KEY',         'Rl 0LqlL/U!@3`xWVPk,llJPF7s46?)sc-Q0%<8ShF4<8Di5~C<;Y8P=L u;*}fj' );
define( 'SECURE_AUTH_KEY',  '%4,t}!_yvEi;gCj+0/ekK(]Ror _ogDw.i[W[qRZ$7:dLHx(PpR#=SpBa.X~u6wZ' );
define( 'LOGGED_IN_KEY',    '<?oGMW}3QioP-l0_9*iye(bv5uc>`>I}Y*|, 0B>(73zmwK8Hli8.)U}#Z~A4*l~' );
define( 'NONCE_KEY',        'av=}9hjQ*kQPld1Gt`ohgfa;{E;6+d]]a(Y)v/[PB]O/))mX@rNSpMG?^`&9hSwv' );
define( 'AUTH_SALT',        'JTrJ YB2]9Y]l;B7/Ynd{_E}[z R>J@<#:}@@<g~7n`HR73<=k<X5FuQRcjN+Ab3' );
define( 'SECURE_AUTH_SALT', 'R;;.{ucd]ow[BTv![bWh2fKUc7#o?%9QMs#LTB<wXDP_Smms=-*^dVj[z6BR}leD' );
define( 'LOGGED_IN_SALT',   '){xlbK0pD&1vB (TB$m&L72A*vnuO=q=F3B$C]zLcn<>MzB)I`VdWm$~hkp@mZA!' );
define( 'NONCE_SALT',       'iS!J;zj~0jFuA6dyPBwMe;}t1qHY0D-az%c-5kDm[kjb4@hy9L5u#AH% xjw<)0F' );

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
