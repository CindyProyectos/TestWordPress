<?php
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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         ';fnX#,$J69){7)7[Y1sL{!3=~t6&pPlc9C7x|m5L1KU-}$k6N!w#}DJKG0Q/HPRl' );
define( 'SECURE_AUTH_KEY',  'K`8SU71.yM:nAeXLLG~k/2,N4W=zH`s_c=VA}AHC*iCc{f&pmSB(~Y:(DX+7RLOl' );
define( 'LOGGED_IN_KEY',    'xa1Wx+<cEEqRPiGu]5U90#N,z^,NQj]fg+!>GX^SEHu?]k2M:ai2cy2` MT4,F x' );
define( 'NONCE_KEY',        '@@]1j*F7}wy6;DW3+O6$;70Z;9>0o|2s%5Fo @jWgoA_{eewM=aX<?Sy;tbKT=H{' );
define( 'AUTH_SALT',        '==il?$gJu1R-&Du+`[mbj)D-Y0W,6r+z*82V/tC{2|,9iDl3aHL[YbH~V?L 4t;w' );
define( 'SECURE_AUTH_SALT', '>_-m+PM tQ-(1(NmIf:~61P(KM]q(XqkoA$ @fFuT[w%:2Y;-3s> M+d1tp,M3G6' );
define( 'LOGGED_IN_SALT',   'sr fITh?f}QRr$5>&[xzm5x75aXL-rANfHALP>qJIjke!LzJs$EN8x[5/~Y#/_Y+' );
define( 'NONCE_SALT',       '0b)EG-%d(e`y|N}S{!YDKxi$n87W fl>=`+CEe=YjSP%5Zn`+d4X]1g4azeS)z8u' );

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
