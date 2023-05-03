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
define( 'DB_NAME', 'testwebsite' );

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
define( 'AUTH_KEY',         'D(PE.4a3&v}IG(f`B1q.{M:mE6`mt$6iS_{vh8Zr{esk%OYHW/br^=j5l[ct-9u~' );
define( 'SECURE_AUTH_KEY',  '8$s&5FQI#cNr?_X=;U!G{w[Ym)!-3<YDQX+F4Pi+2E+rttP/gC5=Z0OM@<o]Hx.U' );
define( 'LOGGED_IN_KEY',    'OYT*?%NV}4>y)Ql7/]2/Re@KsV4o^,*D+Hpl`OPi5$U[B L)t>*vYAe8yu?fDiJ2' );
define( 'NONCE_KEY',        '!k xw{S9#0gW>i,[d4sXw +v$|r2MaShF,<N;<c[Y0^:CcV+[]Re)1J?H`e.Gt`B' );
define( 'AUTH_SALT',        ';E~z+ZoKeG=!4=(o5jW=.buU%J=W,Ig/6rJX(s,H?_scboH5D}zo&AsHdW6BL}P5' );
define( 'SECURE_AUTH_SALT', '|U(uL!V$jG +%o0,dw{*4ukx VG:+t>jw4T,ZBgIgI<Qg*v2&%)M3.q{JGr2r#Pa' );
define( 'LOGGED_IN_SALT',   'k[75(xdZCU8fKB8bfRUD(B(^D5#hs]Xn][^U&d?YwB1RlhLc9[PIl{_;u)Sa0@Rx' );
define( 'NONCE_SALT',       'kSo;z<yq J;&jdiUtw+Z6_e}SC@f(,9chUpUIw/4,GzAh`9j-F5oZRyAZ>{uR7_r' );

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
