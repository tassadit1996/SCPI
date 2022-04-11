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
define( 'AUTH_KEY',         '}K>~lG5=ilC:75l}#E8]]5$9(=019cr,FC7qy9` IY0sjtLR.uY{ Leul*T~5e}p' );
define( 'SECURE_AUTH_KEY',  '.ubg{9LyP(ZsiO3z^!vFN%)YYX:;u=y5#|VG~F=gy^}y(uTl*+bGD4 1u=St.z]|' );
define( 'LOGGED_IN_KEY',    'b5_fN0go`-E3NTJjQ1zUBM:HNCzL^&az:SxU+>NO^`H;vf&E-zjf_CHWp:A[)a:M' );
define( 'NONCE_KEY',        '<gxnsN0J|}jz{@,M},>M+/:TX1hYbKj5IE6,n1zs5[DZ{ge72quqkyg@j3uzB5b;' );
define( 'AUTH_SALT',        'a8y*g)?wkQ1~U.EP[CGya+)T[RO5Y2Vyui/rj)l87]0`*R|4kS,azG1q(~|I*Fm<' );
define( 'SECURE_AUTH_SALT', 'd!Mi^>R^T?gI.d`cr<:]cG?&f-k/idTWfy2rsd]:&M4/L?.&4EvG|.`,Z/0, s.j' );
define( 'LOGGED_IN_SALT',   '=)CRy}ZYI:&XsGiQ ig;WBsE?2A<@l0nLse;O$# e0q?Wh_ p:<@&DxQEDe5=Mri' );
define( 'NONCE_SALT',       '4Zr_}wv|CP]DA8hU^rAmOJ9uuRX!#}XJ~:Dc^N_u-pK6RMGcXc9yjS#^u[n]EOTK' );

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
