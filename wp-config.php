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
define( 'AUTH_KEY',         '<T%=CJIi[^{v{_=!/3ydr1MILAc<S-C65_Sn%{^B5OS|ICxV$$2zT3&ufb6xD=0E' );
define( 'SECURE_AUTH_KEY',  '/1iv01`MffoizPkOD1=z]=+m!=bp8?D^%n6iQrxvL n<9@oNn8kV|VVpj1>q{m]n' );
define( 'LOGGED_IN_KEY',    '<3kOp.iJdOP(cPc{id(|TOl|^(Xnss&IU*Zh.o<WP((*$%`bo>(#[Z>_X_,f(23N' );
define( 'NONCE_KEY',        ')S`|TpCeMJf<PBLf_HqZ@3}Pb4Y=aZawxVVZUkXM`v~{V:FF^yjrc/E7>:KdMx7-' );
define( 'AUTH_SALT',        't$ppubtD^62OMIVmFV%@U[>&v898[dQJHcA(gD8ps}$~0Dk8c!3+nwn+z:~#5Y1[' );
define( 'SECURE_AUTH_SALT', ');8{UmMy=[jbdH=VWk[PL_N8Cf{j)o )e{#n>]J@}I9huGLc[%n`xTGVQM-*MW<E' );
define( 'LOGGED_IN_SALT',   'f@}!Z9h_Muf*8nE-[wP5s*>~jd}8$Y^]0iGT;mEU[]|(039OjWjaA%1L4vH7sz5=' );
define( 'NONCE_SALT',       '*?U#m-)Gf NUtJ/0enzEvP6n:[9T]! Etnfk=Y*L`NUfF}H8o90vDu+b6#V/AZ}P' );

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
