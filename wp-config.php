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
define( 'DB_NAME', 'pabau_assignment' );

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
define( 'AUTH_KEY',         '%,Y-5@mx+*[(tI[A6JD57$if+=EV70h^I:Sm1]lME7vCzJjmf4ho).Tlzob?dB|p' );
define( 'SECURE_AUTH_KEY',  '~ztUyA!vlw<zr?fEdMfrS_Gcv/J$l*DpmUoo8Q)5}s#bLUPt8&F~7wJ4Se2HDc1f' );
define( 'LOGGED_IN_KEY',    'gs12)YzpSie@>*>{N-<h%f401u(9$:oI{e C>K}M;bx=N^:b(O*|!x4dE/8=eZUA' );
define( 'NONCE_KEY',        '!=YO0nq(jfz}(uEp:.[gu9+Dyg|R$6ilC*>Rfm`jO/=6o@U)0NW]QvR(I<M6sJ[_' );
define( 'AUTH_SALT',        '{$]oTR<ozu.6-(.gP!yme5.icx/sbMn;`23OhVH2NGKsOC:VZSm %(wUDr//~~ud' );
define( 'SECURE_AUTH_SALT', 'E|~p`8]SE^{8406-N+,8Q3#m!!{peX iv+6k:!xupC_;*JIBc#04%L1NXmm{-Qd;' );
define( 'LOGGED_IN_SALT',   'y%u%7&A%k_ND?]m^H&k;9jyl%=+T_7I[.adVReo5~Xu!in.NWhMsY]=vO~z5X]tM' );
define( 'NONCE_SALT',       'cVJS*^4,>SuxK$lDV0=ik[(A[]vVC{o).^#V:./E]~5$=Xva-S`L|3~R_?sAg%On' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pa_';

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
