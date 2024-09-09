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
define( 'DB_NAME', 'bricotips' );

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
define( 'AUTH_KEY',         'qWE=3|~{QJW*7kmp.2QV7s ^O4#t3#(#!uqd0ib@qa}Z)}f4m;8)xI&pbH4lJ*eA' );
define( 'SECURE_AUTH_KEY',  '(T?na/@nxnTI/70gcQ=ahUwS2oNtgZM^v _kr@_S<>6xHuoC);8`}z2.bUy_!%Qt' );
define( 'LOGGED_IN_KEY',    '/G4L5rH12AUP.fd,W8g|#wL}Cu1}r&fUCrus1bS?oF]wZrHPe:%[4-cQ=HU+V^-U' );
define( 'NONCE_KEY',        '*=*RQ+>H^iwa]XC5c&skTK/n:=Cc>=B(>%94.&[3;=Q2KQD}8[[D~?WYVM]vh5}F' );
define( 'AUTH_SALT',        'riv~=Pynz?;Ca26VX>vx&*pc.3a->$gBG6UU=QDL24Tq:njg5fy(.L]vo20b1yxF' );
define( 'SECURE_AUTH_SALT', 'CICo]uY|=:>qB~}PdNQo}%mY=G(%OlnAb+^1^oVV{y+A[}|sV;=Pf_Oxk*IhO(Ke' );
define( 'LOGGED_IN_SALT',   'C>RcPtZ)1C8yA{BGPom}$,V~*4m%h?YZpw%uhATS:o_znXu8J$j@>/5S3`qr_{]a' );
define( 'NONCE_SALT',       'N>~*|qs9D?E|b6gcc-/=Gd kgp7:3.1.8K/!<2OnRCblX$$^vllOn!$:uw~Fy;NR' );

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
