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
define( 'DB_NAME', 'q_test' );

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
define( 'AUTH_KEY',         'w6RG7(7Ce26Wpf5GJWR=NdGm}2`ke$f#YKz]YZ~8sxRiy$d/>c[,/Lv3+&8pkRQ4' );
define( 'SECURE_AUTH_KEY',  ':bJ4J~Lr{{tlVkw6c#^0`CtEOts.?<Ql*SG#D8lG0FGl%1!m)4%t|0]*lC+ieX[J' );
define( 'LOGGED_IN_KEY',    ']`I*w{KlY9#*ptIFe@VQrv}^gj_0E7E2C{3601IN[-kO|~?;Hhg0-$snDgNQ4%)_' );
define( 'NONCE_KEY',        '<w#1$!u5j=|e<F21<%fB|[3_zu9!8I7sLl-SS<kWFby/0jVfCF?*zrZPH[Rrs#}@' );
define( 'AUTH_SALT',        'E9|yUhHoUd<j|W<x:GH8iXsclg-B]kvvF{f7fj>rh4V!X(g]Z5,B2XKeLnY$RMhr' );
define( 'SECURE_AUTH_SALT', '>yack+|6+m.58gHS7?zoOc& *OS$P#<`$ue^$4aH~I@@%tBHB6CK||Y65y{eOVOI' );
define( 'LOGGED_IN_SALT',   '2>Xsbnq~lMw$w=rXu!`!t#oa-B}WPx92JF}.&-juE6FF0%~$.Pub&DQb~$wJQvkb' );
define( 'NONCE_SALT',       'e!}xB.Uoq(*Ev7<ml<*>e]Px:??b<)Y=w_k{s;iyXDlZ=TCkJ;#T4lHN)/c~RxY]' );

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
