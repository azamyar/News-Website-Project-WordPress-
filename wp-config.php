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
define( 'DB_NAME', 'pakistannews25' );

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
define( 'AUTH_KEY',         ':<KN}p9%*RMWA-MBUi%Dn00C0DCKnE/]U9CNyG$*x_97ea=ZWXPP/wsE_48*pR^d' );
define( 'SECURE_AUTH_KEY',  '>#hq9t~^*5|{}!$x}[`kRYx0|kv:L:9$2Mf(^<Fa.6!LrqA[o&#S.cn#?SyH3GFq' );
define( 'LOGGED_IN_KEY',    'FX)N~Wdq.,h3=MzCt2{#dv2_rD)$_DL#bGlSm@Y;}]I07[%UXVx6EVjvc1[9#%ID' );
define( 'NONCE_KEY',        '^8uZ/S6n@Jc3AG8T_uWM8wlG+nL,jNWHKR>|VkhWEJm+(3Z,k/Iv?1V?tdVu)JrI' );
define( 'AUTH_SALT',        'H3r}LM=t#lHE.yb7UP^ZZyT*hNH*1s#n@oPmeN]YML1NZz7jk$#f^kHqzAl,)9FX' );
define( 'SECURE_AUTH_SALT', 'G!<{?BLRek(_**bSRh~d^Tq9PZ9!V]C+KsDhE`3!c/bs&3{y1Ts]8<,Tu#pHP0NW' );
define( 'LOGGED_IN_SALT',   '?eN|L+~R]z!F<eU=(R5/c[k1FU&j|M,@_wIu}Mjo,(GgN;Z)[ -1aF7$.$2tuL~Z' );
define( 'NONCE_SALT',       '~pD/B;]m#*]BK<n6*qt{toh?.s(Sp51X]-(:(3nMGg*Kz92A1cGKQfupj<^7Ts18' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'PNwp_';

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
