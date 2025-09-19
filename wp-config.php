<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_581' );

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
define( 'AUTH_KEY',         '5V^dzu$:,2ieEj_bM0=R-TmocK&/ U(MCHs8Czr!I$=Rx8Nf)(@^2/V1Jn<@g@rp' );
define( 'SECURE_AUTH_KEY',  '>X:2RMGRab}4O.8`<=V<(dG}k)D>J]W-)=x:nAwHI,;[/wgp5FEiZ 3Ud>6l]@43' );
define( 'LOGGED_IN_KEY',    'dW*3u6GWHDvI9cwT?G5PblMihYk:5_Or-_qV #c,4c]-@Wzbayxe9rN^ve:U<vPc' );
define( 'NONCE_KEY',        'Om*;$Dvo<-#|B/xio*_t6?=i44xj0X@4M[:F&A)0YR?cQzQ,0mO>;7/C@ =*@g^C' );
define( 'AUTH_SALT',        '3;)--ul,:x,0>& 5vpT@^G!OBQXK/lLQ1`9~HR R8)Qfc2Ozt>Q4[wsi)iBVQaAo' );
define( 'SECURE_AUTH_SALT', 'Es3~n4[_TVegj/)|$N@`aLLN9)I?gx-x3Dp`*_cCKpp0M*Sx<vK)#PSbBj==e5ES' );
define( 'LOGGED_IN_SALT',   'A`,0i:7rP%6UDkg/E*N<WDrn))I?B@`}_3!5A^VXmYk{l{Wbo`ouzK*,tf55)y`J' );
define( 'NONCE_SALT',       '%H8hD^/tbOcqtu}[c/bQj/G0IkU@%PtGP+LYbktp:E[? lGs5Z.PWL9?`GHV]fR6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
