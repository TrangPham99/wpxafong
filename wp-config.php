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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbxafong' );

/** MySQL database username */
define( 'DB_USER', 'dbxafong' );

/** MySQL database password */
define( 'DB_PASSWORD', 'trang190999' );

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
define( 'AUTH_KEY',         '(vtd%Y ]6:Uwwmx{O}TzXxR>62sOVujnK6z.nK(gGq|}g|?/Vue[<P[+JXK@u}_?' );
define( 'SECURE_AUTH_KEY',  'J:$+e&Q@51<b!~zT0{R3Ix:i0mhrxy-9&M|eje <iFj-9j;KM6<ue:6vpTo9{!bF' );
define( 'LOGGED_IN_KEY',    '!I|#_o=xQaT,?2,Ts;R >/a_M@&9`A;ir2rQZ2Al68pX<V3Jm!.!Q/F:aagKD]gn' );
define( 'NONCE_KEY',        'iZ72zY,sDLe|ood(MqxX d[r,nUNd$Ff)q/F_f<2rvx,;Sz-,;9Uw$hm?W9E(9yE' );
define( 'AUTH_SALT',        ';?(3?QJ*@D% jJ!VROio%=7tGlcpRQ50xwoHcx_E7jJc~t1FG0+dpR!H8.u!J||d' );
define( 'SECURE_AUTH_SALT', '#rtIm0#-B5j=pv-:.svC!%wKg~YaZiRrl8ZBrTn`!Ujd}er*$Rh|!pE~I)@%W,~z' );
define( 'LOGGED_IN_SALT',   't)bo#i7xhs=_3z%3S+kKVGT.K+RrvToT/O>p8*xt~]q-W)!bz!#+j8O!;R}cc)hB' );
define( 'NONCE_SALT',       'MUD`c]#)rUAvh%J{cokF]uxg;{f_?wMUs`GAnv=&8W[J]7}6(.k<tx<p0XWU0F; ' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
