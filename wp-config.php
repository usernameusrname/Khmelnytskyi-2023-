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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mysite' );

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
define( 'AUTH_KEY',         'o3I)+]{@.^>?kCOF!&a] 8Fh14:lS+Wk;?x!Y+@j,7)*Y=>okc) Z8T,$@*l[e)}' );
define( 'SECURE_AUTH_KEY',  'nq?*g|v[T_9NFy_jbB21Hh^Zn$uRL!OE~NcSp7?skT0-<b`-F-PC>J+6xwTzO-e}' );
define( 'LOGGED_IN_KEY',    '~5?7v1R,JZFZmHp4irI Fh{T[)Nphs{I).}BfeOv]m_I<l{YJ?M~gO:T ~aKB|>^' );
define( 'NONCE_KEY',        'D;h-hZ]`n93%EJ1i?P<5-?<s3vBQG2k~CkoJZ^b8untmi Vo0_ySk@RYx|Z!mx#=' );
define( 'AUTH_SALT',        ' ){{=J`&CeD6WrR*>v0I&9Rl3[lg{z{he9$^=)0kiE:HR_$@tDx9KVN~NKp?42 j' );
define( 'SECURE_AUTH_SALT', 'tl~g]l!*jEZ&h}qu]|!{!{3[EHnTBQWJ;8[6aE`?,z0Le^Z)4LD.*Ry:1o+ep#3[' );
define( 'LOGGED_IN_SALT',   'dM/#D.-G$B;JL9 e-+uLc$]{~#[^ZJyHaQt[R_2i_9z3%+b#B9h*zHL}eU1KKV!W' );
define( 'NONCE_SALT',       'bB@IN-IMG^j#SIm&3{@q)MT~/XXq#.1d<}Dg8;E,[:+sDWGJb#?$7?Hc+qWb6-Oh' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ii_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
