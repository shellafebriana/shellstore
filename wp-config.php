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
define( 'DB_NAME', 'shellstore' );

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
define( 'AUTH_KEY',         '6x4)M|Rv8:o8fQw;GckCYd9V8)cArsth SuTND_QA+a0XdD-~L?tMpaXh<Afa}?#' );
define( 'SECURE_AUTH_KEY',  'Tvf +h6*NO $O8aA%LGQn}{H^LG;v+]8K yPz`zWG6O{P:NRJ0`g<$>P:ZwETy%/' );
define( 'LOGGED_IN_KEY',    'Pf5=p@=8J!2ia6yz@74w6pX:|fLe<Wd2,-k#*>ZAMeJ;Ql=8iYvOj}NK{qlqHSgO' );
define( 'NONCE_KEY',        'm6RUtR(iOaO:>=Sx+M=}fv ooVF|7#rn|Y AZ-!77yVe;xB#_K<M!y%7pR,5V FZ' );
define( 'AUTH_SALT',        'J1P|2j#KQw)X~mQpK#/C<39mW0 plqRw.0yn8V)! L1xVBN o$c:x&WA#4e|mU0k' );
define( 'SECURE_AUTH_SALT', 'Ja6+?>n,(O&mBinS+ZUo%YJ`>33PUH]LoNSgeAr6RDoD3g{UHk1x!RVOO-`#5,yo' );
define( 'LOGGED_IN_SALT',   ':](_t=YW(Ly d/?jJYz]pC?3cULYybTNo*;h~eAnKsv|~W%c# _w(B2R PIV hy?' );
define( 'NONCE_SALT',       '9}2@p8b=37~uP$}wHLBDmo8=Uoizpbjgv`<Pphe8lG>_h.-V8)!kEIl<qu}vmwA6' );

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
