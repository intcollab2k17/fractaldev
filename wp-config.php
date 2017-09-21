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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/var/www/fractaldev/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'fractaldev');

/** MySQL database username */
define('DB_USER', 'fractaldev_2k17');

/** MySQL database password */
define('DB_PASSWORD', 'hA9KWerp2fjq4VtZ');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'UYfe>5HD95xBmY:*>4({*#Gj+Azm4IuD3GU.|yh-ZC,rM55n_oE^^=cJ}hLk<q9,');
define('SECURE_AUTH_KEY',  '.@-1B>8-j4>Nm0M~RI9h#x=#Ho%c@tsue >&nMdV=4Id3G*<98 lsg<k<dEqkZm%');
define('LOGGED_IN_KEY',    'l;![nTYox!2rGfZcQ)M*y~w3~`-voKp,P-/ga9C2G0/z)@ipwv=l:pUvS+>)eap:');
define('NONCE_KEY',        '+=*f&eT#J@e*ji`U$7{-n{t/^%~b^a^@VH4$ zc0A]<gO1-?|PV=Kk3U0h#<[A?0');
define('AUTH_SALT',        'W1sl#?7fO:z!DH|Ots:,OQ$|liL}5{NVH#nE  8Z+bRCx7@U ._>/|WD2AS6(z?)');
define('SECURE_AUTH_SALT', 'wb!g&>NtGj*ATLBs>3&~10L:ovaJV[~~(f88$B-6~pU$g*L%_p)^i4hzuC.jI34w');
define('LOGGED_IN_SALT',   'c}s4dr[7f@d;bBc6>U<L,N$3cS#fF.69= 6t%1okQg,l| :Yv=W5t&MwCC[wz3)a');
define('NONCE_SALT',       '!{1-%CE2bO!l1qN_b`oY-K &|~Qw(<0h1L,2&hAVM3Eo167TZ.$jd*PTe7CvUk#`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fd_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
