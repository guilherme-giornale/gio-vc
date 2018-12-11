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
define('DB_NAME', 'gio-vc');

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
define('AUTH_KEY',         '7Pv|LBQ-CCFKdQqABT^L?p0nq2?6)*)*2R[00k3wd?}eL8<7@co4yB%h B}^koRX');
define('SECURE_AUTH_KEY',  'VKy|A9CUg0-_qw.d[.Nfbxeg~OW/d|-O9VnByjd$U;773(R0ss-lS!uE|TVQI;;_');
define('LOGGED_IN_KEY',    'Ej;GJOcbC1lR:Unl|Y^yNNG%sfW]:H7K?Fu ?R7!PAY7Abzz>l~flEr51#qNDdg~');
define('NONCE_KEY',        '_O#z,eYOU-d=Iq_gnx/28(7.%Uy}P8@1:L)~XIX~e+FI+l{@riiK_Cg_(gAUdq|M');
define('AUTH_SALT',        'pa!*i8?LZfN3Lng8q?`(`VI(H0{UI_k;QX7E6_A}d`zce6+`z~[1)C!S0##@Z.ga');
define('SECURE_AUTH_SALT', 'WH[.j dp}/v]XU=iGEi>lD}Y]^vRvvw1XtxE|M}JUq${ysYHCH&CIogpB,6^)>L<');
define('LOGGED_IN_SALT',   'fOybGX$HyVA*y.`[R7(ReP8w`mld>6wZ}>:~<CIcttF@XCQ+tCd.QG->nhN$Fc`[');
define('NONCE_SALT',       'Bd-9AwJD,|N0KWe(FP$QE%.qb{j#0o<S[Gf1>Gwmu)4;qp(6W+`F]u%5kr^Ns;iH');

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
