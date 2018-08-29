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
define('DB_NAME', 'skanda');

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
define('AUTH_KEY',         '[@X}K a#FW=-G1<([Afmc:n=P5FT2-8tE$MFTb?SeT]eYSFChodUN]/_&a.c4YHo');
define('SECURE_AUTH_KEY',  '5c0-Tp,m],NY{F+I]bQV|FWGLniR6| GK!{oGF{Zu}66?%MygW${)X*!cM^a*f>F');
define('LOGGED_IN_KEY',    'sS}|My!a,8QZ^Y48nF*;~ZSf]aQR|o:@Bwe{;92f)Nk}qx1`,mtK!#?}GdC^a5 a');
define('NONCE_KEY',        'r1$5vojg$0 >x/}gi&4NI7s=FlZBLF^qy?kZd,0;y}|R:H`|)x!^lw5q,G2N<K*[');
define('AUTH_SALT',        '=1co48U_0T![c(rf=ll:~/&m]d2E8tSMA}NCQ9hc@;_+43wVO1XTy( ^mDrRTCKp');
define('SECURE_AUTH_SALT', '=o{% 1F3^?|1L,~1jNb|V-5;w2?ngK>Qra0&lU&Au1~<w{r3uT9ZS}:k+7k.A-f>');
define('LOGGED_IN_SALT',   'WbQt6/IzX.Xz/T~M]%u2.-@2h!AJ*`AW`0,8TOT?]t!&O$tIZu@*6pVdjjhLP*#~');
define('NONCE_SALT',       'VX{0o#IrQ75CPt8Pvra(qZ-OsMFpAPV+|JtmtS`#IU3Z?p}`DRdYZc4GXysmRg<D');

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
