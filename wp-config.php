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
define( 'DB_NAME', 'bobagirls' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '!ad^/,1+(eYLRx{= sVEK*B0N2)Eu],C~OChQx%z#:$yK._2uwHE/L[KFT]wFeKc' );
define( 'SECURE_AUTH_KEY',  '`!q;&;%MqF@)*59IHH.LI8%b%C~ZtW`<^&neW+7YC6F^TI2>6{-w*#7qlWg`oRQr' );
define( 'LOGGED_IN_KEY',    'A<8j/oXyBrcjTd]KyyXmKsK7zU)=%i+:eZ3a1Z3{@7OCNVu8;_EgyZ2_#tE0jV>z' );
define( 'NONCE_KEY',        'b_$*B <6DRse 2^,pj3<W<cKV_S%{&dI9TlG65tuk=hnIn}PfWClxb#P|PjrHeI[' );
define( 'AUTH_SALT',        'Hb RED~9=^SG%?[{*PSmsNCnX1}Jk;t?%%}wKFO}<3~u/<Ai~YJcyCIUHbMwWc<s' );
define( 'SECURE_AUTH_SALT', 'AhrP1hTs#>~4U(dZxlJTQ!_I2K{ /iJqs?f$x@PMRR1d)FkV59t&c3T@HA8x7u`j' );
define( 'LOGGED_IN_SALT',   'j].A;68nQ_r.tblfT]vsGZ8)(jE(d-X]nuIm>C39b6woT~6jI*(NAg<*q{Z=c$GN' );
define( 'NONCE_SALT',       'rA!@lq*?xS:%HP:EM{k#EP^:ZqKEQCCWx}TmYSv}u3WJ,y3^M{0=GQnW4M{&rM=?' );

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
