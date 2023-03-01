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
define( 'DB_NAME', 'myEdu' );

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
define( 'AUTH_KEY',         'c@KLh?{M3*&&&$iaGWR|u>?AA~1oTj_&d}j&na1y]3i{b /y`jy%p>n?nY3V9uIL' );
define( 'SECURE_AUTH_KEY',  'ElA;wT@|5f8@y.+Jx8JwJcNxJ{NmhQv!1~dNgd,;yb<b1odz1T)CgybKq<qjF4qa' );
define( 'LOGGED_IN_KEY',    '{+ 9.`dV3,7K[i{pTZ,]%A!a_ ]tZRKEgFFUC]l%l%db!m Eyq*x]h+2B{Qp2,L<' );
define( 'NONCE_KEY',        'yZka#4Tk=<5O<a_/*)YX;mZ79>)b:AJIDD(a/RQ[mO:opcBW,>|w~#,~Vj@nbqPk' );
define( 'AUTH_SALT',        'x*JX^b1vg&C]<>G5R<|9cK*|GGbxD&SEa@fGWL4eAd<nh4z_E 2e^nH}?D/o^[m`' );
define( 'SECURE_AUTH_SALT', '7!uiT`g>5LsA+?jNz*>X]$v0_@jy%>su[0P@Y7X|,{@dKDy/6i2mZ!A,8l67VfVw' );
define( 'LOGGED_IN_SALT',   'nJt%fvP3; PKCZ!#0h+(>OB$-%PvO`=tnjhT9D*UuBqsW.uQ!.!xG^ZXQy]m_{kS' );
define( 'NONCE_SALT',       'XQe;kP7fl49a0J5jOjusrjGKY4)tlmz)K(aF(-I$kQ~<,p6A8{bS`aW,2OT6bDX)' );

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
