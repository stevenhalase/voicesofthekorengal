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
define('DB_NAME', 'voices');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'OATEc=>_7ck/DCW@*.RKiT$MJ#N(R6nI<ysd])d]MQmE{!:@`|b{B_2k.&`$!QL8');
define('SECURE_AUTH_KEY',  'B-8;+Mv1M0QEsCq`i^@R|+!QG:9rNX4I+E_~wz3|{|yBR*AD?8>T+FhTy5Ax_4r6');
define('LOGGED_IN_KEY',    'en50wDHN~s-3M/NrzLIxi(*:-LT{t?)I_/)e=fEkS(/Zryc@0wXBETIaHy3+YU$K');
define('NONCE_KEY',        '>Av[r_l!o<k|DQ$2-F|2s2}ob5=D, tX,#Yy}($.ea!-*VJ):7XqJ$*>[n|WM:64');
define('AUTH_SALT',        '4chq04v }dfe&,%X/-BAh8Nk,Rl+.Y-&#SRJk=hO[9f,P2tsGwXH-GtEX}9w^IIR');
define('SECURE_AUTH_SALT', 'a9hH{ea?r7jw6~w%%Empf:(kDK6 *%eX##Na6ms1r1R]!/mg?EVw/60p(^=IOjZN');
define('LOGGED_IN_SALT',   '0E<m5644y)N*-K!4{?L*O]hx+f-aLf:sMnsq-X~lo&6oZ5C0R>yG%_-+I!@_T- A');
define('NONCE_SALT',       '36,m|`P%QVksBvS,e2wB6/>h]6C~j#g=Hve)%f8,;*)HY{5,Yv>4Y^L?S}x<2YHa');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
