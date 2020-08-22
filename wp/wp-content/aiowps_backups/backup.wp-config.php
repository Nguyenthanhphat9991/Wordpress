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
define( 'DB_NAME', 'wp-cntt' );

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
define( 'AUTH_KEY',         'mxTJJ?~Fw:Q)CSq>:xWJ,9 N;&L$>p-*@U@b+Etr~a,Fi@S>d0ZE4|?zb1^P1GEe' );
define( 'SECURE_AUTH_KEY',  '$2Y<6?5O#n&qF~tmH*Vg;N#`jL:0k|0/57ubOwb5l:@)LO-_=PR?e(3(+LkE+Pfa' );
define( 'LOGGED_IN_KEY',    'RzPYoWt{{eO^Qo*nY/fQ|T9@2,ce2@Y+Iv^`LkFC7&UFpbl{EQ18zUpZwZmvR>9Q' );
define( 'NONCE_KEY',        'd{+QS BjT{Kt{wWE,Xt]K# Psyumxb/%AcX);:@+(O>xS5M9VNH$b0mzo?OCFu)2' );
define( 'AUTH_SALT',        '>Z7~b++x^Id^ J(7j5q~h#a&L;,/M+XqPJc#7Whq9O}sqjZr%a=RN^HSR@i%Bp[4' );
define( 'SECURE_AUTH_SALT', 'G~JF9Ij+~Id kjVYfIbXys.@PG,Z[RhQ=QhE.HzVhExW^h4wS{naJ}%[&Z=19ilL' );
define( 'LOGGED_IN_SALT',   'w_`%npoGx^2SpgoQpdahggU]<[t=!1xDAjS k|EKJIf 6%K#TLfuQ)D,6z8hbS{t' );
define( 'NONCE_SALT',       'CqD6i&Y>w(D91|dFU/42T3=halffnNrD=8E*4Hbev.IyfK)y=9|5/6QVuC5wz4cz' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cntt_';

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
define('FS_METHOD','direct');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
