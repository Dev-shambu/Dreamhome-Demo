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
define( 'DB_NAME', 'realestate' );

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
define( 'AUTH_KEY',         'q)*viJ(:Gv@7g.IEqz.0mkuQ_yP[Yvu*3pN6HtD|*pDaX.Gc<r`%j;0{a7%/uRk=' );
define( 'SECURE_AUTH_KEY',  'i1?q,1)/9!SXA}N!c+.=!Vc{K-{+LwQx,;;P~#OJFEJS1T^Bhm9^c2a^hP;5E{?K' );
define( 'LOGGED_IN_KEY',    '$$<.t9g_|R3^nP_,]nZA:-q?+|ILM.WSl^BO]A~8| |!^d<wr;)dnEE0< v,[ZPC' );
define( 'NONCE_KEY',        '[(X|4,$:(&TV:G+8jZ5(G3N}[vc^=kU+.[,|PVNO`3<mbt7C{yWvxZV6t~zcg!Ox' );
define( 'AUTH_SALT',        '/HaYxVCr~!eS^JQX??QM#@eMuk){V932??;k<uDj:TXfMa)#EU^mA5qwy)qU*2d!' );
define( 'SECURE_AUTH_SALT', 'ske!`Ob$&s{sYcP]hv)6(5h:W[b[3QvMJd{`RS8w6rqzj-Y2MV2~+@Sg&4{wY`@q' );
define( 'LOGGED_IN_SALT',   '@;+ZC|UUx2ma}I*-<K|`Fk4FBT.3oXEKt4f):WQ,m<^F82y?qf~vQ(t4I+G+8SVT' );
define( 'NONCE_SALT',       '7[/my}&-&:EDZK$A&:~k_lt.c[uN2Y&nVU;Yo#<=:AnA!DrY3{ra({Nc((!nqV:z' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
