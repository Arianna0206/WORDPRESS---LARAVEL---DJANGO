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
define( 'DB_NAME', 'petsBd' );

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
define( 'AUTH_KEY',         '3~X@t6d|fRaM?ZstWBzda+ Crk%]Arr4*L}H#jZ&r` TG^20eN`!_tF[YBUx;swn' );
define( 'SECURE_AUTH_KEY',  'fQz%: BPTe9gWndjc;Pg]=dhmG~L#|m+/;2c_;s3r;GY{~r[|pwGY[WE~(m8|JuT' );
define( 'LOGGED_IN_KEY',    '2}6WhB:y`qBq5_>?vrho2giLTQL!3#7mSA>bc9u$%IT-2~>*{`~P(gX8+OP$w_!y' );
define( 'NONCE_KEY',        'w5khc@jg%c3=P*qYC`CQ@(PG9{Hd:4jJ<Q3CGQ7#KiG8a]NLe`pvQ@`g*sq7zKV[' );
define( 'AUTH_SALT',        'O2o[ U+wE$P2c:yusU q9a^0xn9@nq*x^N6(n5W~3(7C%Eq3oN<<Q%~iqRRca.vw' );
define( 'SECURE_AUTH_SALT', ']=Je?{ 6/95a6-_}hBq1UtUIk.|{SHP_Q7NOB|*e28_e URrxFX(2/_2H/eLZTA~' );
define( 'LOGGED_IN_SALT',   'ygLpUz]evWu.n109)cd1Aj3*)_7fqXwS8 U?%@c.7}-Bp^P_C{w0XpF:3^d-c}ve' );
define( 'NONCE_SALT',       '1CLhC617i7?S|.CFT?H6Fdc!1gRowHwGMwH`R&Q$aaNI^e$jlBV7rCx$(95$1~W&' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ar_';

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
