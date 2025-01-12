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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'seotraining' );

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
define( 'AUTH_KEY',         'R+c7=?K)e#JcW<nR:AUw+B:2KFG(3+%YXLuq3Xv;uw<8x{s0q.4$B%G21c25}kl&' );
define( 'SECURE_AUTH_KEY',  'nrJXe@$f=YjW+q:T{cmSX>Dti}tB]5+=TD))(+=E=DT&E@=iljZ4*v&FwbEdh;|`' );
define( 'LOGGED_IN_KEY',    '+9K[r~wQ8]JfnCzcM8T<T>ko6YR3YFMx.4aTdi(3bTxn2-3`SX<pRKyo/`{wd`B-' );
define( 'NONCE_KEY',        't]e<M!5jUQM+f-4m4;3v4Lol34.@VYa.pW#Rr~rz>-2|V`|#ptJX %4L04-lma0R' );
define( 'AUTH_SALT',        'p>1ve~0OS7]uKI0LV+>!hKcGdbV_?[Pb4}},Y`6^$r|sw]E;$:~3$GJ@=.IR/td`' );
define( 'SECURE_AUTH_SALT', ':1^MQZ.%}!_n]J{52 J=Xxf/+ZUXqX47PPze4vFO!<d3gtDs F4e~1E$g(lBl-N3' );
define( 'LOGGED_IN_SALT',   'erBv@O_1gWzyIP_r`T1rA2aJB^hFkk,};u1T.g<c,L fTJ|;(g%g2+~k|E6ahexz' );
define( 'NONCE_SALT',       '7w>}Lk|8YC 3=vW+3OkFMN6>cn$=2y+viNHp-6$ 3V+LJ%uEio*p<B,/ E*i^BH$' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tr';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
