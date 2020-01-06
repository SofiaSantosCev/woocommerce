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
define( 'DB_NAME', 'woocommerce' );

/** MySQL database username */
define( 'DB_USER', 'sofia' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sofia' );

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
define( 'AUTH_KEY',         '*f7WUo)^.!+NXgBgW#PP#;x9MOu+<ZtJ39F1:;mK VB@CXb!68 `jvNldt#U#@~L' );
define( 'SECURE_AUTH_KEY',  'dkWDAFB3WO8L`j2p  KP9RNO1_RC(Z8Z~h^6)Cr{d$uhjsc-%;G#o:RTaZ(Z>]0n' );
define( 'LOGGED_IN_KEY',    'T8;QttIYMagR(#rnE[+vV._AzVeF{FH8fBx^:}4&jjNMinrF|_+.z>k{@vT)maWi' );
define( 'NONCE_KEY',        '{g<oGuK<[g79Gqp@t1%.qD1TPX`W|n8}tR?vpzos2tAqWmL3Ol5 !B.qb6Nt&EX,' );
define( 'AUTH_SALT',        'V*VN@xnn-F$M.[LzyugCg,#A~qhNr-ENu;1zsyg)BV 7oEni;=),+&+w1~o/oY^A' );
define( 'SECURE_AUTH_SALT', 'wAv~MWjWlqtS.>=.HVAdS A*4;4~#;O,6PZ82_1yZ.{`pXZSp@].8=R5A{?TqFQ}' );
define( 'LOGGED_IN_SALT',   'i(O` W*Ugl/;AETf&~Z0|9?gds99J/3Uo<nds_5@c)>7CX$5uQP8#09jaBDon~?-' );
define( 'NONCE_SALT',       ')JfU#Z.})17i~a_2wncQ$*5N/YiT;|TF/T)TOgG)A<XA%ILA&EST@#;sIC2apb[h' );

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
