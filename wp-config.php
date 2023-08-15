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
define( 'AUTH_KEY',         '^O/eOf^<eNS-a?W`l<8#lbthntK1k;:WHLWF4_JCROQv-W*hKh:-W5Y?so`O><N_' );
define( 'SECURE_AUTH_KEY',  '@b`K6$q#g#z2Mz8)3^E_.@~ km0/7%XW,6[[?V~`zwx5|rZPfdIwR-}05G*m,C)&' );
define( 'LOGGED_IN_KEY',    'vHn|<.RbyGetwpZ0KfJV>72z`8T,C=.=~s4|EPc)^?P9}y&XI:|k~,Ssq/*d<Nn=' );
define( 'NONCE_KEY',        '7bfJ2scQ(&D%==@y2FV{9oAf3*jcu!frMY|d3;)+=achRg8NLeTa+PMRl!7peA:E' );
define( 'AUTH_SALT',        'iBAi45g[yS;hH6j1jl%Z=VZfs6?+nkCh+C%xU{4;eK<ui0W_W1KD2OK~s2K6q}zO' );
define( 'SECURE_AUTH_SALT', '#qmg:)!V${93|8X*/;ijXD`Omk;;UMF^@MV,+cKPDSD+m ubWk=o)J:>p#/|;)NY' );
define( 'LOGGED_IN_SALT',   'z9Z)UYwL/Pi<M|{:*s?$HZ`lsu=HTTodX5h815_BTchGY3vdMAVXr t_D4X;V$%>' );
define( 'NONCE_SALT',       ',SHERQ;rbmyP8;cv2GZ1@d|/OK64K=Rwm/cs*o&Yw;@B3.!b0f5^tl,)WvQDiuC ' );

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
