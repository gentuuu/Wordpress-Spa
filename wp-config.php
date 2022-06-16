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
define( 'DB_NAME', 'danuekmyft_spa' );

/** Database username */
define( 'DB_USER', 'danuekmyft_spa' );

/** Database password */
define( 'DB_PASSWORD', 'cA64Qj%qOQr-W-W(' );

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
define( 'AUTH_KEY',         'eV78@{$9jF:^^Es=kV]7f2hBB$ywf3$cM-N`VNw<Kli@%nv9t^YSM5#_p8T3qB1|' );
define( 'SECURE_AUTH_KEY',  'YBf67{!ma92n#!{8W5v}#Kpnm*/Z#}tk`<.I:kdmX3|O31?q)a*iHIuR$A3Z7Iz,' );
define( 'LOGGED_IN_KEY',    'g`[>/@c6=B<eXt-K=g~eH|;Ldp/jqu$qi@`=RMeL{llnqkkKPl@a>9R(Xz*P6!vX' );
define( 'NONCE_KEY',        '?MIXGq;P*]v!f=]HjM Imb[l@XDtr_/|43dVOnQ1KEj1Hrl6kJq=L}6E2iIS>; (' );
define( 'AUTH_SALT',        'JI1,|h-l4Gc(D=vC_,~k)d<d(D+3tFKh;D9pn_=,E~Hi`td^u1x1;O-axRCXDv-7' );
define( 'SECURE_AUTH_SALT', 'on5SxQYPluM^uW`c<`b(ivX$9i}fz:B3oE<Hz]%[Ewt2!O!8b=cN]9P5;$JW9]{>' );
define( 'LOGGED_IN_SALT',   '=mD4]9vK/1Is1Tb{>e;+.IimK4QM/yWyKM|AGre4hQ)$ev(;B,:n*PTLdk&,6UXd' );
define( 'NONCE_SALT',       'G@4*D:j,+vOGd&T|stauUzS)_MdlyQd/=a02g:&!u>fHhR:qnoB?M)LBmq;lvMG.' );

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
define( 'WP_AUTO_UPDATE_CORE', false );
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
