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
define( 'DB_NAME', 'cbs' );

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
define( 'AUTH_KEY',         '_h?/C/g^kbsZSs}rp^*d]y|*tkGVd0BCf#z03wAJ4#?r|o5TKx1c[~PNL]WM;Jv7' );
define( 'SECURE_AUTH_KEY',  '[KGLlvE/T4TiHJl jL!/?%;3S5e2wcF{Dse0n7<<AD >Ap&yc67(G;edGf;vwP(7' );
define( 'LOGGED_IN_KEY',    '@c=8|$]K%m$q5iS?z{[E}XI6?lU}7mhAjIA_]+.-T?B=HfWp/BS>tJEn?LyK}HL.' );
define( 'NONCE_KEY',        'IVpUB?DN[4p&qA2VDng]9!;L5-#_lS%7X5%-/@goj~^rPH[O^3J6PiM$`{E>zaog' );
define( 'AUTH_SALT',        'lkx%ij<ekQcrP1&x%lh)PLMp]4*_Pk$-d&$hO=QRXdnRE+34kV[Gf +0MK2n1CqQ' );
define( 'SECURE_AUTH_SALT', 'LJWLUu@7yjv#HcIhX5sTrRmHP1UFb9ld1;T8gy;8B@I9[M.D5VldXre;/6= ULw*' );
define( 'LOGGED_IN_SALT',   'qcA^4hkFK7sxdgp~=Oo?L`}AB%Z60QI0#,mB58DY{YQO|zr tng[GTp$mH~/ wv}' );
define( 'NONCE_SALT',       'Kci/N73&0J5mXTM|Bs#Iv|ufwQ-r77#mo^>B8[Xg2pOlA6q;Ir1?y&~p|ZU)uXE>' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_cbs';

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
