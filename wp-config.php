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
define( 'DB_NAME', 'qrcode' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         '}ob|bqfRA*KClTn>)U@e 46/3]:Qi~ght%$r9U)-*|~NEpP.8q>wNSnq=t7vx{q]' );
define( 'SECURE_AUTH_KEY',  '{OGN<eZqO=E`DxY;og2Hc%agt6)n5m /{(&/`!5bW!KNaeKl=HQ-n0RH3+I4:J?_' );
define( 'LOGGED_IN_KEY',    '/BHeuko]9a(PzY>E95$>0JT+oDBU7vb18B2;IQ@d$^#RYXhiPu+ao][.|:6U=z<r' );
define( 'NONCE_KEY',        '&jz,S1}0a7K7qtVO~eVad.f9o5-T|b;Svz$P3<p9-h/io5wV%IHY!x]@Smk{ERD?' );
define( 'AUTH_SALT',        'MvNT7G&Y(/NK:TY~yXAi2Hp7F$R!iR&gQpyEWJ+PD(zZI<[qK_3 gXD.RgIK~EEO' );
define( 'SECURE_AUTH_SALT', 'B8S+3vuMK`uXG9yC8R,fQxxN:]GFRl/GsJrjxx(|;y#.Y?#GffqM JA~[w9AXBsQ' );
define( 'LOGGED_IN_SALT',   '(Wc}[r GqNDGIu#-*}N|N{0j;6_j_tEY/.Qpefror^+mN*p==xSu{<rkfYYL%N^A' );
define( 'NONCE_SALT',       'A[[;[nHpwJ:AM@T3(Gnb2iFUcQ|T-V*I!}:D3h,Z-iV-3p&[d/cOVczXRSHI<oE4' );

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
