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
define( 'DB_NAME', 'morissetteBd' );

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
define( 'AUTH_KEY',         '*oMHlerUei6t5|3^:GHU^q8z{{`t!wLaMVV{PB07u/OR{1>Q)7rh:BZ@iZh5`IG#' );
define( 'SECURE_AUTH_KEY',  'V,B8}Q||97P!]DC7s?aLf=HU`#v~5UsVuzB 7Ap;a_m` E]QQLSXa,5wRL$jpZ V' );
define( 'LOGGED_IN_KEY',    'OW>s^@B4*cqH{01XV~;}NDJ*a%9`$^!m/[N;uqWAtr4/ jI:]6nx_h(k9,,{1n;a' );
define( 'NONCE_KEY',        'Xf4i0o>1zd;ijYz+g!1LEN}_mP=G=!eUrY/`GFL/FI#I(1.Oaa5zS{01I}*.,Y*>' );
define( 'AUTH_SALT',        'O3+{O}rQC64tF4Bf0Y{zwUFc4oD`p=t*KpRJWJ|9`3N[(|^/fH73CY]fgMr:+NEu' );
define( 'SECURE_AUTH_SALT', 'ke7MDzFx}#B&!}gtpwh{+=hz_2m`{.?h{LrC$Q};nJB_#KV8F2}32rYQV]05^0-;' );
define( 'LOGGED_IN_SALT',   'e13l^WY65g QU/%ZL1~o$0b)[k`Dx}5p+TtEeQjaix@Ey%kYN8.^TzC4sjG|ad>c' );
define( 'NONCE_SALT',       '}D4^dtE.N8KAj<2]Qs[DbYXwaysH;CSl!i.Bf/n=!|3n5s?lYzPJBj8k~Le+:uR]' );

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
