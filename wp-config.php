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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'SBK.<T0.I^h^*>&[2*T>e+uymEO=N%moVf 6$xufA{Y,6 ykYWhHH8z#g3LT+W{4' );
define( 'SECURE_AUTH_KEY',   '4Ox=#Mfz^BLk=8iQ!v3/#CD5rLx3u 1)zVVPy8_oB;k9&GyFD,H*[qqg=`nVleCW' );
define( 'LOGGED_IN_KEY',     'f.#$~-VW)-SPMtyca%XQj*N$7_.$#Q(z8^Nu;rg4^W%,Z412*&~+,T]6[SxXp+VD' );
define( 'NONCE_KEY',         'CG 0L <Ohb!{x >?6vG57m& YFQ2Cb|1Iug2yAZPBm)&/{xy6?:7Nj5aek~10gP]' );
define( 'AUTH_SALT',         '*X `A54VbW?^slADYPhTbf|>c6CEG;.k;$%.*Z{7BwYTM@Srk&MZ%z4<&12Y$N^=' );
define( 'SECURE_AUTH_SALT',  '{w+*3g[?1(Uo|HTk_SZF=FOY$:_$ar1@oS8k]&)r!$ioqD-)b9DNK:fK9u$i6{HC' );
define( 'LOGGED_IN_SALT',    'GK[PdU({0j]Zb`G#7@Aq~4QUv&(ec)oj&.%JDl,46&iH?@9(2vg9~QAIig e^H`h' );
define( 'NONCE_SALT',        'sws4dq!C*IguMOaOw%]+BWX{:V<gJ*uD+HH2{^;l/K+W_NHC(Sp7]LrWh)pR8g~#' );
define( 'WP_CACHE_KEY_SALT', '+}Z_Hn_:F!^+])/gASFz2g(%)<Lvw1sVBGK5gfBcR`]0o]Y2_^Zw&svR}[1qH1PU' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
