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
define( 'DB_NAME', 'wordpress.co.uk' );

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
define( 'AUTH_KEY',         '!sPc|@p,f9gbRIy0$c:1{LZa8,-{t2)16q`g7~XPdXwZ:6Nma,*47?Kv.S]}LQEN' );
define( 'SECURE_AUTH_KEY',  '4u!^.]o^an&~<wb}I5GmCf+Ed@my.w8z$s3OwoO;xoW<@B:R[nrLm)=; {xXSf@|' );
define( 'LOGGED_IN_KEY',    'K`F+Vti}=}Z!j)?e5IJh!z,p^=2|hh71]OJ2kCIU+:i_y>EK&CnZA)0-ay44xi2q' );
define( 'NONCE_KEY',        'G%I3_3Q@!cIS1v8#iDyPWA>f;u>B 4|pM*g!*$6T6(8H%Z^UDL34uO;W:|lIn,[P' );
define( 'AUTH_SALT',        'fffL]4B$P^nR- ~hxtol7H;y_Vo5n. 6W8uBRh5hM* Ow[F{iAYeMHO5,r9Q#%k ' );
define( 'SECURE_AUTH_SALT', '[p_d5VC;G)1BggDw&qBf)pnp#o_2XJFg&jJjy_q*vuas0u J~OQq m4>Wua7joHD' );
define( 'LOGGED_IN_SALT',   'LI6Fw0>Tv[/U>k08fj&#zig|nio|Xt1aP<(l,`boSmBQIrG{GE$btU)L!H*mD.hp' );
define( 'NONCE_SALT',       '[#nj7Uaont*<[X|b!qhcNX4Qb&5`5e9/+4V&4;{1dKtZ#*jb7fZ6eaE6+H+m1M6:' );

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
