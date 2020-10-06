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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'dhaval' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Ganesha#123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         ']N nf:1-JVy|mo7k!MAr,3W.Jj-N{eQc;`sw1>em*KHMTsq)-m$gWgr+kzo=sLpB');
define('SECURE_AUTH_KEY',  'D[sGn|59B1|||,zB,-B}jJraW})m}DaI(xSC3{kibe|E^7a3!m|sAd1VI:X1BJ?#');
define('LOGGED_IN_KEY',    '[c(i-mNWGQ5_v>)Sek}y8+C$k|C^ZgVeqT|9G66gU;Xqa(N[g!L%T]y^*Q)+5U.p');
define('NONCE_KEY',        't<>!O$,+UpdI3>C-:S=Gz?2v[N{lhb0b|CNEzKxi;O7V![os%o+vd+A^I5|j21%z');
define('AUTH_SALT',        '.!L8+=t-s2g)`^K;)@zdDB{a>+P`VE/i*z0ZW121c@8Gf.as:[;_nk@~{$[d,;Ak');
define('SECURE_AUTH_SALT', '>3g4cfd~UiLq#78Giv40r{Gt.PHcvX#jcaR4]|ons8{ _t*>|Bcn4&&5Wf[(*ZdO');
define('LOGGED_IN_SALT',   'wst93A-}&+WP#Wo|@P31-_T[kT+A>:19v%Pi6#d? Q{TK+*&32+$-!c+-1pM??VB');
define('NONCE_SALT',       ';jFwM9wo (rV`=!4IkF)7U@--Yk?dsmL)_t$ulJW<}9:MpR?uKEc>Vg8aH>sGXhl');

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
