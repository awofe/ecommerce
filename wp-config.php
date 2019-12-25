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
define('DB_NAME', 'goke');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '2F74(NS-8:DbLB2bt/lKojqols7Vl_};U&S0S$DrWtikuoI0S;I=Rf^&|-dPlKi+');
define('SECURE_AUTH_KEY',  '}xguEi6zb[,aTs=x_wu[s9..~j$Oorlgpf4Z-QPGopUdM?|hT27>j!;ZOPa-5jBj');
define('LOGGED_IN_KEY',    'al[kg^fB2f;`c:#s9<qI~QQN{v=F#!0R322ihFjnQeJi{F=tB1Z[)9[t/gQ>xj1(');
define('NONCE_KEY',        '3^4$UUmN}o,!>$HOr|H[vkf *,zT&w5SbmR3xb>E5TVJdG1T,@!Tg^l}knA8P[8/');
define('AUTH_SALT',        'tUkc)<wsU1!l1.GwsDE]6}eWW4<yu77Q(0i!9X$?*r#;d6> gz_hKdQ:#@SlC>c`');
define('SECURE_AUTH_SALT', 'oO!xC4u|EFctW:0ND`7fO#4Zg`%jT)YR2L0WZ(:h<C0r+X?qbI]cY.kyaIWiaP8B');
define('LOGGED_IN_SALT',   '`|tyU!*viw;(zJx4.[guO1<#(~L@DavG;@sH{xPyE,#rH8bD@p|u=9;5M4@Oh:pX');
define('NONCE_SALT',       '&8^l^VI45U(*!6MYzmC+<5@m/hG}P|OyqI7[@b~3<#@@<q_>.%|EAVh*WQ?aGn%)');

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
