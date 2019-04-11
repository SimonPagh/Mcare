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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mcare' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '}T+_V+<jh$n =7bzyS]`X Cp*[g|We,:/,(Y9Bg&>61)*kiKaJ*!9W$q@Bu.NAk6' );
define( 'SECURE_AUTH_KEY',  'GPD]SN|ml(y}*L]];u`^j -ORupGr+1~W|+H864+@&u`2-R0ek&I*_sgras&,Z44' );
define( 'LOGGED_IN_KEY',    ':<lAH`-&P6,Qou<!Lss*i3(g>7$JVI!DTJdL4WLtWF*et0mae]1&M&S%cSJFgN_*' );
define( 'NONCE_KEY',        'zOD2PA`JmckCPJVjI9t/&ZDkG;x+2aj`=Ur?EII+GPSjYX]Cbm)%p~vkD=iNRf &' );
define( 'AUTH_SALT',        'pP2^j|g;>xVMW4`A{emF4K<S?%brQ45&*CueUWVM;lfjzE1fyJSyl`N6X2*&P>W7' );
define( 'SECURE_AUTH_SALT', '.r`BoT:HCP#i*f9?9R7r0Pf4+}akIMru>]PGznD&LGU#Zw-lQJ(D!_Gm/$[{s>H4' );
define( 'LOGGED_IN_SALT',   ',.n t~}fD_k%.i)z_xWtF43jjTYi/B6s]!nBg+ji8eXTtHm!_LYNF)g{T5Ewi  V' );
define( 'NONCE_SALT',       'L2L<pC[;|9&5.0hGH%XLs+uW4(8jvqe/8$AczNCH0gJ0D[w664(-o{ -r~M#$J4_' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
