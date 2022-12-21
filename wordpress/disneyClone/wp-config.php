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
define( 'DB_NAME', 'disneyBd' );

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
define( 'AUTH_KEY',         'kv0J`mu:>V:]XxoJv]YZnbuB1jM+U],;H>n3L4_^+kO)?gY/^SZgmCe}8`LJb`~8' );
define( 'SECURE_AUTH_KEY',  '~tn+|/o`a{}r))y4HjJ1p9(5.l(>B3sda[IT%GE:#gS!$|iMP-}!S?Uqlm[|8ojV' );
define( 'LOGGED_IN_KEY',    ']^u+t bGslf1ri6dM*OanYeOBl0Q;/b2;i(@QoUM5,q7n~ZkT-YLJjGa:%U,?~KP' );
define( 'NONCE_KEY',        'zA9@Z(sqFM OSng!j-?wm>ACQ=GlSe|!vf14%2t;Gq0%YtQtDr)R{5UdObra1o-f' );
define( 'AUTH_SALT',        ']bUr){lF1[G}!o:Sy(NTJvl$$o^1HLa2om0,R1lZe,G|JBRsP@=m]]a+HT<H&ugt' );
define( 'SECURE_AUTH_SALT', '/Y`zZfJxV+5}SApoNdsAGfH&E=sV.fCb3pJmFPCWvn|LU(?>0]DXQ4iKd*Bu[Ryg' );
define( 'LOGGED_IN_SALT',   '^gth$,ysW0XU)?! /Y`w_NUm)Cw}`BhW.a:3O*v-<n:Rg%O,!`;nuL)kT6kr2H|$' );
define( 'NONCE_SALT',       'i2u;wt@U/h]BQGuE5yY@CX)cphH|8)Fy33)1n_uZYQCNv9@=N$dgG+<VLW~76DJm' );

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
