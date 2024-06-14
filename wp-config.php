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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'data_web' );

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
define( 'AUTH_KEY',         'PC8D}z3sqWi+|vz/:da 398{bx5C2E]-f{]AwrY8e$7leW{da*T5!$|?ay7a<Dvb' );
define( 'SECURE_AUTH_KEY',  '$`n:;W#oJ6jtj=<Lzi2?ERP<])B;yD,MPQMcEkTNP7$1ryM[c>(+wXt?}2SENTL%' );
define( 'LOGGED_IN_KEY',    'u,Zr{Ya&l/at]CWVRC&]aAlbqJ,oXwblC%:V@l&{BJAB2st3!MB~=r>E8j@aS0jE' );
define( 'NONCE_KEY',        'F%>0UoDx(GH]aO4.,s cUy>[^f5hLew&0L@m+f@(fSAWm|Z.z. `P@`&#Ko6,bTc' );
define( 'AUTH_SALT',        'hBROa(K?d.Xh.{3U)(QxFVCD+k5L*$K0+:[L3Ov7j%e%Vo20l>RX+TQy^M#5TEj~' );
define( 'SECURE_AUTH_SALT', '6sGRcoJ};nMswSXU2rY0dsJc:/|ReV>N2[tD{;:=Mh-S,s5_S_M+9:MT6PNt#Jp@' );
define( 'LOGGED_IN_SALT',   'Zu7PS>~K}zo!G>5yN}K@$L/JVqq=myBUp=9:uW2M[CRHFr7=gbVc#1K#NQM ~O`4' );
define( 'NONCE_SALT',       '_&//t)sZKX~?jor{HEX:N=gK8Ob@%RUN4.T:b~@0=y?W(s*X WP#$lrJua_`mnH+' );

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
