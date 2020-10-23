<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'shopping' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'd1F&jSE2X{)H$um&u{X W8>mOwNuy6}0kVo%xzOAM&m>4{@Mc&K8hTk7$?60:3x&' );
define( 'SECURE_AUTH_KEY',  ' gfl1ioU=[;gIce]tbD>`EFG5*T|]2$E.S(d}}1[l&(6&#]VU._2F;`jWy]aR%lQ' );
define( 'LOGGED_IN_KEY',    'uVTnD~bm$@0wG@Ta-*xWe_CU<icJyT*o@Uz>#t%5I9|b-@PE}Y[Q7+dfqsjl<gH)' );
define( 'NONCE_KEY',        'E]RS#8;_2~;UD6ZWU|-7UXQ#D?wTpL1N9Z$903-Q!^qnHL.:3-){oQnzZ>y<$rK~' );
define( 'AUTH_SALT',        '6d~ti+GS/rJ@!2r7`gumk!UOlbfA[.7kfu/.&*:Z]hN$x 1ie;L*@c%9;gRBZ?Or' );
define( 'SECURE_AUTH_SALT', '+Dl]a8m:Z$![C}d9=M:d*]jK-GlmgH)Paw_@_B BUeXU%,>2c6@(f!Pc9EnJ{~!.' );
define( 'LOGGED_IN_SALT',   'CpiCssB?X(Eg@kFsLwv|fqg,YAWbUSP6srn8Tsva_N#,U2qqf=raw@J_~_rbS;6 ' );
define( 'NONCE_SALT',       '9JX6p4GU6*(:`C@Cl`dBP/f/>woWQR8lSCkVZ.TRtf3tx57dC@U)_IuXGKx0&=rc' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
