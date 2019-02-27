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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'thanh' );

/** MySQL database password */
define( 'DB_PASSWORD', '@Thanh1296' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'l!!&-}6[1T/+-Dd$1<SedhvT0MOGFtwG>3D`jg^S/H>8S,4Z!j6Z~H|X9bW#k*T<');
define('SECURE_AUTH_KEY',  'r6y}WU[-k%8;xTs]XPx|$VVt==OJ79Wa7w@]>ktvR!ew/K)7vxFZ3RHwm ;qZ}rI');
define('LOGGED_IN_KEY',    'NAEH)R&x[m{p=s1w8uljOqlJL|],2G($Q`ROpq/SU/[.Ba!qVt+~Qz!( {1v@Ak&');
define('NONCE_KEY',        '%@nHoR26+G+KtPd$:v *}Y|=/VcxW9IK1MdI^/yRon(m?dJp<Zlv+<RSI(0.p 2Z');
define('AUTH_SALT',        ':St=H-|Sa)}Xe(V;~Gi}<WQld=;NuY(6<fZ|ZONc%?Eid|#0HQQH-3$Xt5zH_Jkr');
define('SECURE_AUTH_SALT', 'A6r=~/n&Q6}B7GnIc_I(~Uf-H1ad/Ix=Lnh3_-TeB/,z~us|/KT,-,!XL>5.*i3E');
define('LOGGED_IN_SALT',   'CZKE@H~<?#hE1H4UT45lT#Y }[I0(gza_h><h_[>%f:$M{%(`c^RujB/|=9|?F._');
define('NONCE_SALT',       'Man|$-[>o]+U5:8G_PKJY|)aJJ*=88|J*IM;X3V@s!{$/0K^MR`grH<cGx}b4;gd');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
