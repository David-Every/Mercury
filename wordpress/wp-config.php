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
define( 'DB_NAME', 'mercury' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '0dfSjVQwcu}.XM8Yz]Z_d(h`8/^ru3WlMr$CgIz|h[ps9x9>]5?iXOJ9O.wdatD?' );
define( 'SECURE_AUTH_KEY',  'gQ[`Iq+9`]V.Y,:_Gfb=wHB|IH3UrTU+a{)`V3-_._@yW9|FIq0 0!6xkS)0Lr#n' );
define( 'LOGGED_IN_KEY',    '<6`oVsz9K9JNh|v?c95yK=v2KUN^PA/f7Jo1#7}ktu$W+VfQQOL*&#<e6,vq#rQx' );
define( 'NONCE_KEY',        '.lnhx.24myARUf +h.qf=O=}NEN&5_<T 4~p#lHJVSNB<=]%&[%br%wYo<MvqkD?' );
define( 'AUTH_SALT',        '.9G]`mnpltp2*p,4oll%gQaNOx.]^KO@*CFLKaikSB<mDMp!rwb6Nv8d-nVA*C(B' );
define( 'SECURE_AUTH_SALT', 'czR~m2.4ehHDZ&g [@P:M{y_:#}n7[/$=gNJtv3[KNhwj6wxW HO; ,Qa:oK-8H^' );
define( 'LOGGED_IN_SALT',   '-FNfI<w4rIRh~6S]t!//<R&/?u^~~OlG(5aMJ+0pf .)h_eep<p1]IOQzw)rYEA~' );
define( 'NONCE_SALT',       ' mM2@h_%_zICV_*+->O}#9V5X!^W%S2r]bZjKNfwV;E`MDAAbh~0;3sM?,S5S| 1' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'QF_mercury_wp_';

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
