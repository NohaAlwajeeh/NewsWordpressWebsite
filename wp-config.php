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
define( 'DB_NAME', 'news_wordpress' );

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
define( 'AUTH_KEY',         '{8G9&yIj^4x$ak`@x|?ue.u_W#xKc~(WB9{e1-=W y3ktG3&y2/83^`MR1#l3z)2' );
define( 'SECURE_AUTH_KEY',  'ky5]~Jyd/h2~ocnYrE=u<9nE}md5P3~L_lXSAHU/hXp>}:~;7FlN>+3<d~DWo0Vu' );
define( 'LOGGED_IN_KEY',    '(YI`NQ+q<G[UlT!dCrRPdfiSg21Tbvz?a)}@q>*}+_JZlf%.Joy+hjaS?GfZDn5L' );
define( 'NONCE_KEY',        'Xayy`JUmB>{yhcURvYp0U?N_KuaIZ`G!5>msb&Quh1$xd$~mfs(pW#Qyavqxv^rC' );
define( 'AUTH_SALT',        'M4LOJYjUydb)VyjRmp~k@w3}beE`Fh(l<5c$Ei4H !qRuufKixS @cV0A$* 9Kh1' );
define( 'SECURE_AUTH_SALT', 'Oc-|}f{: =J_F[fAiH=5AZ_0}{F^3iZnWpvdt/z?.<4AcWH66D>^T$T#TJ_sXs:I' );
define( 'LOGGED_IN_SALT',   ',u+gW5>*;.iQOw(F@I]m_w]1d}M])xU@bM,mvuF$}*(H(5M!Ral.32-OPVWmoE6Y' );
define( 'NONCE_SALT',       '$+Ad?xH,@;NQ3~f2.1Dz*i9WSO-+/QTF;TSRX4+ZFOtZu_eWy}Bz^DPz8{_`GTA?' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'news_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
