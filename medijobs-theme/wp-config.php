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
define( 'DB_NAME', 'cstsoftc_dummy_db' );

/** MySQL database username */
define( 'DB_USER', 'cstsoftc_medijobs' );

/** MySQL database password */
define( 'DB_PASSWORD', 'E[5Nbjt8@LX^' );

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
define( 'AUTH_KEY',         'A}mdL+sx,+43e@%W:=WWO{v<tS@Wq=%![9oSk_Mi+9-}8<+ w/m2uTS#<B5 (PP|' );
define( 'SECURE_AUTH_KEY',  'y9Js.FD:a-gb}5o$G:fY3eyiSILm#PrAsK$)0kN)xZNSX25a|qVusD&@7skCAb[h' );
define( 'LOGGED_IN_KEY',    '+R-4^#!XY@SxpdY<Z0u^qm1`m[PxqN%2j{]g&5Y1eNtm<b|p_`-}MSrJZ#M<.m>f' );
define( 'NONCE_KEY',        'pJrmw`&)I~-VrV,2K9D.3}BFL=_{T|+[/l+eUQ K{/^4F3cXfw-,SD@$jK-+u(#`' );
define( 'AUTH_SALT',        'SCS@[!);P?0]-J$DVea* S!;#k@j6FoEQ2j3PNd{RA>dAKDwY;Ec[lU+;9RrMG<d' );
define( 'SECURE_AUTH_SALT', '5_8 2O2<v{Tl)ujcg,J?*E9g(Itst$H9q$51b1emBcnKKQ]k<BIo<4-9aR7XEje2' );
define( 'LOGGED_IN_SALT',   '[6w8g_DgsLKPelN>dm,g,WG>W3,Xvt<F+},W1Ea+P -UV%x^!#p/0kNJmk+dgyUU' );
define( 'NONCE_SALT',       'E>p55q}ZNd8Bx<Xm!fs+<a.sn)zt/ByCHP;yLjK5it56rS~5IUw8/^Ap$MD;/}lA' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpmj_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
