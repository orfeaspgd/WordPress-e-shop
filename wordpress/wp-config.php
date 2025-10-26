<?php
// Begin AIOWPSEC Firewall
if (file_exists('C:/xampp/htdocs/wordpress/aios-bootstrap.php')) {
	include_once('C:/xampp/htdocs/wordpress/aios-bootstrap.php');
}
// End AIOWPSEC Firewall
define('WP_CACHE', true); // WP-Optimize Cache
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
define( 'DB_NAME', 'wordpress' );
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
define( 'AUTH_KEY',         '^!}.{GhiDp|)$?di,HWJD<-W{^{|zXJkqZA{HT/PFinzkKG>e2+bpn:%(@c|]0Y}' );
define( 'SECURE_AUTH_KEY',  '~wiS. d4mejf v{ @_^c2h$N,U0GG4%[wHc4p*g*Gqw@4i+Q}0[r_vGtcr6cul|>' );
define( 'LOGGED_IN_KEY',    'GC^JokWji5<mE3/$X9ojy1r;Hu!t_D*7R5AFoHQ1sC>VKnxJb#LcLFHXaOcNySP^' );
define( 'NONCE_KEY',        '*s~2/-O{t<@T(ceNRh8J),t)A-%j;1kiuCu4 9^$z2u$tIR?LKwW,&mD4P7^AvXJ' );
define( 'AUTH_SALT',        '<AS%P6OJ([U$)1(zR>Y9!4VysFLSuTgt~HDVALiD}BM!Bg5|rfC{g^K.KZN,#8!H' );
define( 'SECURE_AUTH_SALT', 'k4qS]rqY,a?MThwbgi`H~]J|ffMZGUuypS(O@Z0,x%0gf:DSX8>n@bA1HV0t0rW ' );
define( 'LOGGED_IN_SALT',   'Qp>|dVU`h _?ApvQ PIV^4;?q!%4lm8.t!(ac}a$0nqwsKw*g?y$~PAs].!jl7T]' );
define( 'NONCE_SALT',       '44q2L.@{A~x#M,eSl&2pf6y@ FB}+<Ft?->b)U#>_#^VI.S%6oQg21q}SAh6Mz9q' );
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
/* Add any custom values between this line and the "stop editing" line. */
define('WP_MEMORY_LIMIT', '1024M');
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';