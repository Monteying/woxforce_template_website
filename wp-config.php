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
define( 'DB_NAME', 'dbwoxforce' );

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
define( 'AUTH_KEY',         'Jb:c=pKkb>_Ex2.]f#o7M[ag$R0xz4go[[iYp}L:<zD6~4ud2+m2+;]MPj9OPA5.' );
define( 'SECURE_AUTH_KEY',  'Rb~j(<<]`#to16i#.gpO#&uItx*$l>B{<QM.;2k_kQl:!ulfd$|?$$qLjI/2&}B`' );
define( 'LOGGED_IN_KEY',    '@]s3EvTYU~W!;137Yi]*j)-|WWJzA?v?2SV42lhQk4,/c=kWU0>4v1<[t~%9)DT;' );
define( 'NONCE_KEY',        'cI/:[vKC@H~W1y?Ys:g##aX.Jup<d7sqU}>`-@tOLJz=H<X] [>x=:|zB}yA6Mon' );
define( 'AUTH_SALT',        '}(}]@G3]j|XPg9Qm,#<Y^t0{&K9;#v]~%,A3^#7R?PPr``]-NDKlxHr!oo/ak#(7' );
define( 'SECURE_AUTH_SALT', 'hc  JO3l4YTZB.-#/JAc~l{;_i  J!A|/!Ra6q?SX]IRSxw(`t#|9wnCNLp_!D[K' );
define( 'LOGGED_IN_SALT',   '- 2#qkrI<66*U@QGQiW6WtQ2+Kb0|pY:k73%p:F{Vp,mUqtoveK-:Ra>*YzaFsPy' );
define( 'NONCE_SALT',       '9{|j1$g`+ex<umKw9_71j4i7c2M61s=;MYC!mwG#6!*(]/tw(t3dxl,? DT3x?gb' );

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
