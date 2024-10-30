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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'oshikiri' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define('AUTH_KEY',         'rE/]q0|02^U:e[8*X/;7*I&BY^0j+-!qWAWx?f6&e;nG(2C5oGAQh:6~aYGnvnqk');
define('SECURE_AUTH_KEY',  'jF0u!65yo.@!k0v@Mi;s+|<f6g^>3<*sR{owY~_&Gk6EI2Ef+HQef^/uk?<+>.4)');
define('LOGGED_IN_KEY',    '*g+|CULU+Xazb!^333T;8Uq`2FV|d)(yI:)$M|J#WMk``1_>-&%wK@Y&:+uTVdk?');
define('NONCE_KEY',        'y(H`}665~)<^FrgdlY~?@YJccX5PMRG/cw_*``[JG~qk`xozN-JE+iF/F/KDf-#|');
define('AUTH_SALT',        'MD6+KC6IR87Zj;F4r>u5u{M2ZH=}0gu#~H[Q_F,+(_^Nb,.B<|X}]+CL(4cM$ICJ');
define('SECURE_AUTH_SALT', '6Qxloj$If~O|G+O/3u{NqaOn1lYGd>f`Riq{I/{-0 4x.j?8g:_5~DT;[CwW|sIl');
define('LOGGED_IN_SALT',   '*0;etS}k!rm:{Nw<8@99;L0Da6 Hp|ccT1U#EKN)gaUD jFfEzm,Of.97t]sPcP-');
define('NONCE_SALT',       'wDTH|,[u7F]*>s6V21H@)i}*:5vu<O!~b]dkOt|bTsz{n)2zI&8?dn])ISuIs~!O');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define( 'WP_AUTO_UPDATE_CORE', false );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
