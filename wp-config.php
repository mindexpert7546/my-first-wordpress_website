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
define( 'DB_NAME', 'companyweb' );

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
define( 'AUTH_KEY',         'MA6|y19N6k|in*1ei@}yo=GEE&s==hEzhP*iej>Y4t9#ugcCUEqd$#W!3wCvQKn+' );
define( 'SECURE_AUTH_KEY',  '^4}{Tsnx8P%:aR1a^44=v/j]hhTYTJrE6H 5U;L r$V|{YKTovNIsJbF`T;JGsPn' );
define( 'LOGGED_IN_KEY',    'pj?p5@ )cXY_EZ5/UjqytN2gyek),*<C,a5/!V24/jm9aNAP=j<dks([q2hm0]UT' );
define( 'NONCE_KEY',        'lvk;X$ItgY,mAa@_5>BzW>BCfE=tfVDLnGJdTwT)=;M&~{])j*e[&JszwQA:WRNs' );
define( 'AUTH_SALT',        'uE)Lzw1g`P<Wc6n$r<r=72bSzi&!|1PqnRcE`lF+)fX)}E+I:BpbuJ$)#|>t*Ov4' );
define( 'SECURE_AUTH_SALT', '{sz#U6[RgpmN~Uu ivwAYuh{#=|{BA@b wYb<d&5NMsG>ZKPgOdS(T9&VasmQ=w2' );
define( 'LOGGED_IN_SALT',   '1l5:MhIr5_#%^4yJWiq@#y/RO;$1,TM22Uk+Eelh6DF>]l%%z<IpG9&l/g+[tk0t' );
define( 'NONCE_SALT',       '+frpV|VpY+.0>m4dp(3m-}H^kW;$>YN;Nj%2CH% I},?f(H[|XCKz<tbun9JIg2V' );

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
