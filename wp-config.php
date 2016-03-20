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
define('DB_NAME', 'hillotask_web');

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
define('AUTH_KEY',         'A9InF54-Sa%%Ze83`FSQ?:x{_Gfp2/Iz{0!2a^.8oQ9tIjr NIh[=JFthEpM,yt]');
define('SECURE_AUTH_KEY',  '?e0]j1-vKt*]r]1nPlWkc%iTWY!?90S2PBDy9y|2x[,sG?zX33z(a{!%pqJbIb4~');
define('LOGGED_IN_KEY',    '~Sztcsh |iaDA%u@_;gIo.~XL|^D+3Nmu|xh^ {k`f}yvS%K @9sGSRLP]|c?t`q');
define('NONCE_KEY',        '3s`Ft:C3ff^DQ.+Y7J/F6$I3uM24{kV*=(4zUpP-oACM|[_N(|4$zO)m&ESubxkN');
define('AUTH_SALT',        '3#561,O<?~%WD@3FU4L&4xl?S0r3<|yuJ,0UYiq2DduVoTt6:vGNs?TvJUt.pB+&');
define('SECURE_AUTH_SALT', '):p=Yks{YAzP5D6<$|5!-VbM;WJ7$LvWBE=M-^:O&Z:*;kf#V[Q7;~s`!{45|mt;');
define('LOGGED_IN_SALT',   ')`5=goVcw$yAm=UM;|+.B6K>4UlCg`>uu5SZe2YNba@S|edaKaT#5tB3K-Y-J,yT');
define('NONCE_SALT',       '+c07pG/i6y;KzmRwo:6EJe$.x6.`|?%-PYcqv`s|8}8_[3G@T+a{|]/$5fx4ikN$');

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


