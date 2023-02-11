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
define( 'DB_NAME', 'Synergy' );

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
define( 'AUTH_KEY',         '`>Qw~p1|U}!XkG3rTwk4~gjER(Ib!eBfBv^r3xWjJ?WU.9[gQYGQSQkcx[YuWwib' );
define( 'SECURE_AUTH_KEY',  '[0<km{_`]AM }|Utge*@/z2p--mYkfk-^UfLzGZi>I^5j![@d?MMZ<~A}sK*T%k`' );
define( 'LOGGED_IN_KEY',    'r/J}0%wsboT~u8O.xL60 :eJz@x e57}:||c;ii`w}n+5B*KYP+,4]wLYFh(O+f}' );
define( 'NONCE_KEY',        'ZZzudw$V^#g7Rl2^2mKL|0]sM2$do&GtZyl>_<#VtgFsjh3U?&U~Lua?kvBNQuig' );
define( 'AUTH_SALT',        ',RO}T2OD*aauF9f6Y..C(Y9J>2Y-z4F8N.Se78b?72hA@gP@sLq3cJlBuVW[oba/' );
define( 'SECURE_AUTH_SALT', '1!lcEPf->r]6HiK}2+p;Kr[@5E=CLD?C~/f^ff;bTGNogv3nEE+2I!R=r{!6SV%(' );
define( 'LOGGED_IN_SALT',   '|M,fN0(S`zIF|S:{9jF9asc8c/g1bE6#L)oG{3;Qi=xlS!=Z}?;:{3(IqjFV0GM<' );
define( 'NONCE_SALT',       'XbO>Vm8z#$RA?Un0KIQeLycH9EU^$=]a/0%MQ!8+;4rv+q4vp~{;e=~1W|@F5^=$' );

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
