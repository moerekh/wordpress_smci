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
define( 'DB_NAME', 'wpdemo' );

/** MySQL database username */
define( 'DB_USER', 'wordpressdb' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'UaVE;;qpP[(|e&>JZ:Cy`$3A]LQ-}O aH5jUWK^)!H-x4 ]=|G&wi6C/Etbine9T' );
define( 'SECURE_AUTH_KEY',  '2Ko+8,|N2=h.hk28n|)Jq=HBecgG$gAH^mkI_l.0<Kp;-HX /@<gwFtL&jT<1>EM' );
define( 'LOGGED_IN_KEY',    '.:,D;]Z]$| +Z9Ji2n{+!~: ,-C<q36oZ?oo$atgLK51l!,Aatq{z-c;L# gZd;`' );
define( 'NONCE_KEY',        'vdt!d>JPE~PMyh4N0{pY{jsNty/5S@i>g3VEK?@kAxq-&-IzS4!22+~^o! L?7;S' );
define( 'AUTH_SALT',        '6saH2UTf{9%~E%A#Ma4:bu`?q|3wlgeYkC;*|hchSFYIhP6%KJfoA1dnI~r=`~7o' );
define( 'SECURE_AUTH_SALT', '.a?!nZv7]utu}@k98_UV,I]j$mniG`;zX?j8wC0-V@ SfOp2@RZ+R}+.YUZd%?@%' );
define( 'LOGGED_IN_SALT',   '* ##cd<1|ua9K;9TwJL-W$`r2bRZSpP`-+OQw%O^]tHvSdWMXR.7,G4UZ)p^x2By' );
define( 'NONCE_SALT',       'SkTZu$!SxuR^o+N?Xo}0>KK_W:p@i09;OQ]@~%&g`X;&mqQna*D$8yUL+:(1k8~q' );

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
define( 'WP_DEBUG', true );
