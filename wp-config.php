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
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '1111' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'IwOs:B$74vV/zU5Ndj>*F<?*kyBr[{sO^hf5o8:bb2$65eq-YphYw^[Zhw)bGAl$' );
define( 'SECURE_AUTH_KEY',   'MS8iLb32j1/{?!U,p|+PbM#A>.?t~<9/3S/+4M9`KdPX5o6dIbVCr+vR[-;{:W]f' );
define( 'LOGGED_IN_KEY',     'LmQenw[zXYhKx.}r}mM<(J:[ATdrm)(&BB*efYBJ+-Zt+fp_va$Qp~08LH1+I)$T' );
define( 'NONCE_KEY',         'x=1)IFza{]I={Z.k1}xqYk_u_E)0^~{:xL{@gL)WkP3#2*p$h;I8^Tw#l8AVfa}R' );
define( 'AUTH_SALT',         'EK1p8r4AiPNOo{-K})A22j<bv>z2),[+cb1..%9yAY>m^ZCQM|3O^z>?l$FdE^Xb' );
define( 'SECURE_AUTH_SALT',  '9@2x^p{Advm>mp{rt8Xe6c!LUh!r$j<hR!,H2]*aEOv_es=6D&pmu&U9oO*LNZ<U' );
define( 'LOGGED_IN_SALT',    'UO FT:4%/m1oejGJ !afDkCW@EUzl?zWL>fe^m&yn5=[SkSv^5hEo-*1f2B4KuXB' );
define( 'NONCE_SALT',        '[f`jHH}%Mp|1_2>aYaOoIZ9()!&{e,OizFHn[R;p`Ak#=208>dR_%,6GU%z[xtD$' );
define( 'WP_CACHE_KEY_SALT', 'jc&MBHa_@DtDl5!U;^,J:s2W]B1U>DOy.c{6u.;3u+l#}3S9}9IHt{qTi@=mlz<7' );

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
