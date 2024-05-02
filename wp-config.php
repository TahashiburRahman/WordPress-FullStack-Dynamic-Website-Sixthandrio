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
define( 'DB_NAME', 'sixth&rio' );

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
define( 'AUTH_KEY',         'H{DMfUtepFV{A;>>)PP4nag6hPnrvAvTkC&J,X|s;*]/+1(Y*l^]B}|PezGHNQ2E' );
define( 'SECURE_AUTH_KEY',  ')fE{<@{PKUlzy:Jtw,Cz6X.g;51:A`0unr0PvocphDu;+);*EU:dBj7u/ G^<3c*' );
define( 'LOGGED_IN_KEY',    '8/GY0^#{dm/]#J*d4<jxYAmW2NaV.:<o<R=Gfe$F]ygUz1t`]e|;V+m<uqK6lgXo' );
define( 'NONCE_KEY',        '9YRn# bYgJ-0oc]hEyg?+c0U=zPpLPRPz/H%5lM#U&F&7LeV{H06ZF920)dw@GoB' );
define( 'AUTH_SALT',        'C< i{Q5~21bt=GI4QPMaeO(wDS)#;}/j{vI=nG9WeEUCOz8&U%>Bz`>|4F<WR0&i' );
define( 'SECURE_AUTH_SALT', 'WunESM[Sh]qm5|K)oNqQ#zB^<aC1v]tsB[.1}cn~MW,T~_gCbV?)s;ytE1MJJi^l' );
define( 'LOGGED_IN_SALT',   'M=-SsdM.uUoC</&1rTMum?[5Y:p{*mf@llg}A6Npl42Zax/y%(>%M@wMgTl>?&E7' );
define( 'NONCE_SALT',       '<RmCZ /VHR5kJB=$s%G^xXR]I`RGvRD#E7iUL<ES%68&6#5;&jW@KQ^tgLLHW!v=' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
