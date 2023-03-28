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
define( 'DB_NAME', 'wdp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'j/6!$,%kM}<6/&LDW37FeM/CZBZgz,a`<FsdAH0YX&Ujf/7pL/+<g7wrxvl[{$s6' );
define( 'SECURE_AUTH_KEY',  '13@o>3itJ}PHomdt~/v?*civ-NjKKy&}dVoH4?.U@:FJWw@p3)ez6uh_W}5ML_>#' );
define( 'LOGGED_IN_KEY',    'a5j?BWzI>HXVEe;+[pP3GiLnaAb(=vVq,Jfzjec]K:F],5}{e2N)TWc|p>gm@4,?' );
define( 'NONCE_KEY',        '6S[@ri7fkj0MPKDxEbKQLKl,yk|Q[tJh%%g{ Juzob(<8fM`8iA%@Ch^!aG?8F!)' );
define( 'AUTH_SALT',        'cKv~7P%@X,5C];5eZq6v3VQHaYin|rQjL(>NxY;|!>O~Y+u+9Hjpst33z`2*oYD<' );
define( 'SECURE_AUTH_SALT', 'vVaqc!jKM-t3iCYK>I{!:HrI&Sr+4X9a(wLvkXi:uj-QXvr#?3FbMra<auZ7;7Du' );
define( 'LOGGED_IN_SALT',   'ikjEy$27:xPs3<&{4Va:xe{w!xIXl(=IzZu`0!4<Z4MfUN,C-8>SSQU79C)6/?^_' );
define( 'NONCE_SALT',       'Lc*w_%dPRHUtWhPI*sw`=HmV(k?!*89+$Jx0h(?B0_oUr3n4kGs<,S4X,l:V~%-<' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
