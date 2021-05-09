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
define( 'DB_NAME', 'kozak' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define("FS_METHOD", 'direct');
/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'RW|hS|erNWW+*m|$%l!=G&%,qExH+:OdS?`bU:gmf,uVT,W 1zaHmWE.d6 lyTp2' );
define( 'SECURE_AUTH_KEY',   'U5)CPj>hq~;QBLkK}@D)>]h~7]W2k@]Rbuu_Y(u(=[1^2^s~v84uVwxJj1^!KOn+' );
define( 'LOGGED_IN_KEY',     'MW6PDJOkjv^tK~4(E)oW?>6k.i=AJ~hCFI%T?R%`x&1^$lSBu|F}jpz!bIEPyqG;' );
define( 'NONCE_KEY',         'DP8?7GDpYw6&07e1/Ee0av{F:4T3R.-TL)E^IeUNYNr$%kOe{s0hNeBQ22]Cacc*' );
define( 'AUTH_SALT',         'T3wL3`H~_(+;X`5Tj;&KQqY9q^y~EzLk(rs;Ki?G7yNsJk2&wz$qd Kv=8-e8:d>' );
define( 'SECURE_AUTH_SALT',  'a?r6,^V7C5de3`Ws}71_7+rB2i[JEjtI`$}x/ecN?kRfw,PD?)uUZA9].Exu7?_o' );
define( 'LOGGED_IN_SALT',    'J%SVc46UjM}^LK$zq#myiw|kF9uhCzCL&pykMwBoT*N5cD./R(#,~@.(Cx6M*a*F' );
define( 'NONCE_SALT',        '3`_%SfV}qahA5W +@Ig2V_YCbpHJ2B|J1$p.tejKCS~p~:z2:4|}~lAln[ 3qvOX' );
define( 'WP_CACHE_KEY_SALT', 'DKe.9#0EH#RpHS|p]W3| S:^NhTEoiRE&`m@PV<lRR|E.M.*>8=ItN/lruyy&1R,' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
