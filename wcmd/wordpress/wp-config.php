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
define( 'DB_NAME', 'chenrickson' );

/** Database username */
define( 'DB_USER', 'chenrickson' );

/** Database password */
define( 'DB_PASSWORD', '3KS6f8jwFh%g*fxy' );

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
define( 'AUTH_KEY',         'rX47}c{MPq1t7bl#5|1Uyco8q>$5$+:v-72+bXtY%`=79U~|_4C!JXX jBF}TN32' );
define( 'SECURE_AUTH_KEY',  'OB WW.fQ{!sHuA.1+euc{3,W[wig-XxFNM-N!l:P:R[>SOnB_a8g]|}L&Nv=|edM' );
define( 'LOGGED_IN_KEY',    'S?I(5l1=gU;ilw1b{@XhDVv.Gy} 2&o5/?/+MB/O(Z^]jg[Z/<i5Njh8@>`MGx:+' );
define( 'NONCE_KEY',        'hHnX?9`$7lH@w/mgjdD0Aio3O:%Q|=`-@]!R39Iy-.oUu,p ax,v0Al)w?Hy=ZzZ' );
define( 'AUTH_SALT',        'UBw@^N^/4>_N+pS;v_Iwkoor*[uB; FIGP<U;gAhlXim,*:#)clUdp8<r5nO1BME' );
define( 'SECURE_AUTH_SALT', ')Oqai*6mB.[__D%mGk{,.{,y:PKl%}0_b;n/]G{-HI5njo)ij,`{8hhE=gIL#6!M' );
define( 'LOGGED_IN_SALT',   '8PL)-<[4 @-Q<N,9OduSG@9/q{ !))yz[7:_lDVhG?oGtrmh;Be|Tgi])+@Suxwo' );
define( 'NONCE_SALT',       'eZPC7_=/w.QlgCu^.h-g5rxX!lBZcY$(|G3vtHCHcE-uiQH,Rf8Gj&k.UZ=v<]7~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wcmd_2248_a_wp_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
