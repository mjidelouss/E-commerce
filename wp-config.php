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
define( 'DB_NAME', 'e-commerce' );

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
define( 'AUTH_KEY',         ']m7K+WP:F#?SM^ixBsvQ7ORx(|*WBoV$L+PWZwh:DFS<Tn46j`:[LKg)Iu3xE{$-' );
define( 'SECURE_AUTH_KEY',  '9/:]U40O/|$w&H*}XSjFb jel<RN@_0kmFz vrjdxts?2X7bY1c yHia1nSg&Ps_' );
define( 'LOGGED_IN_KEY',    'Qi]DD<)o:0^Ma|w$*W$F+<t5v$cvoYxa:9|]8F0~ W!0zU_a~6~ou/3rCm]Yuvsj' );
define( 'NONCE_KEY',        '~hHikS^3]}eE,T|Y<6oc.,ifzU5xe:.XNXuQ3;mKZ/)X~zJXn5;tE$b ~md~1!@]' );
define( 'AUTH_SALT',        'Izia?Z(~u`kHlsc24u[>hP},%~1]:Fg:kO}vBwO{~Da`>-uw8%y:|aQ<M_|2{E|.' );
define( 'SECURE_AUTH_SALT', '5:T_vX%s/fW>X522f.3-4NAd%&kw5?C?`v#jciQl7%!rQ *2Cwj&!o;q>y)3V;cj' );
define( 'LOGGED_IN_SALT',   '.|[jT;k+Gh9.Whn.`t;8N|o/>6 qE5^3IXBbng:)q8Q[4YO^*3SG2C0KpNW79zmP' );
define( 'NONCE_SALT',       'a;7q:OfBRU.yCquIQqm#3,,L(C;CdV|NZ~Lzn2xm.%V2tSD(0+Vw?<p@rr,U+m[?' );

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
