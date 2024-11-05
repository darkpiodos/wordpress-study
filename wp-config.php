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
define( 'DB_NAME', 'learningWordPress' );

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
define( 'AUTH_KEY',         '01Mr`%;H, MFFR^eNl{aATon8.x,DFJ4F.jM0@+UY+!,Eqn*m](t^j[s`C%o1&#4' );
define( 'SECURE_AUTH_KEY',  'yYlH9(CdqA7x#`c[,93_U%85|!4uhLe_0/8a-hg7MQ~1s$/w)*zA;^vsG?A}+1h}' );
define( 'LOGGED_IN_KEY',    '{b1V#X+AeFB!gEf,?3udb9|Y)>k=[%yaY>N4]e::?k{$=g8]JZ7RvR;NpS.f/4?Q' );
define( 'NONCE_KEY',        'Be#(7D`9&*YTlDX`@Fb-zym@Bn7Xw<G[{G-se vYeSPUE4|%$i|G QZbrcSTWP&L' );
define( 'AUTH_SALT',        'To[bLy@OMAe,1D%rGbq0/=Yk+OCScqVQ_=mg#<WWeY]/jpv? zF%zq9iTpDzZz7e' );
define( 'SECURE_AUTH_SALT', 'dluWY!wt8m$lT*S9nJmnm3`m;wU)I|#T3sQxCn`Uq1, Nwl+DC`x`X$Aj}!:H!_R' );
define( 'LOGGED_IN_SALT',   'o|n*emGn{di6NtY+_>`*nL|G*CnXD>#QWs{VlU6i|zAFko,v<UX00OUS7.g.[P2/' );
define( 'NONCE_SALT',       'U=R;fut?o|[l=-:*13J}RyWU^Su3Sk.B@(N4{%Oqpk$FPJ%nR8_]wi&[N.)B=7-!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_testsite';

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
