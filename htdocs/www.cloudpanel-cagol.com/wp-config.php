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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cloudpanel-cagol' );

/** Database username */
define( 'DB_USER', 'cloudpanel-cagol' );

/** Database password */
define( 'DB_PASSWORD', '4FlRCSaUikUBkE3jdHAs' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'zKk6]NXU}bAvz^;gT%4|8 8`!6X8cCJ5^9tz851T+/<l2R?,P;c&:1HkW@v~+bR!' );
define( 'SECURE_AUTH_KEY',   'rs)0c]s@Ld<wG8DV{^?W7#74h8>DXIaoqeDpo)9m;57C7N5!1_Cmb]P;=VPdY+3K' );
define( 'LOGGED_IN_KEY',     'V6^h>?Bj[r]{zeE9ATNa>$Zy{JIgGsHb1b48@U2~q3Fu9Q9FPZYDw >,UsaRA,W.' );
define( 'NONCE_KEY',         '0>aP/EG{i%K#JCZeg[;D<^J]%++8)<<Y3C5bePkoKwiD`(x~/ ,=,ZdBr_x]7E#M' );
define( 'AUTH_SALT',         'GoaGyY6x^e2|?Q(gPSrqT5V!5yq#GhH{K/[lq>@8nw$J`ShjKjqS/=DdbhA!kP0P' );
define( 'SECURE_AUTH_SALT',  'sNtI#4&S7}%E-)l^n3BT}xk4gP/[8L<-]&Pg}fIwG;%sN4XN $g|40?++{wfs k:' );
define( 'LOGGED_IN_SALT',    'rLMzWx~?XHMee2u*g6{Z~PYC4qe.~LMdLqMYp5~sG0T-Fjt0qEZO} a6jd4E=C0o' );
define( 'NONCE_SALT',        'eQDzO2~~Lb4:@J$BFrL@MOpea1#kPU(oI9bB1g(N`+zwu#YzG#iI|AVpgd;D9#(?' );
define( 'WP_CACHE_KEY_SALT', '8l#Z?}sB71gzA|lq%0D .7_*&}wePTSa%c>xAR&g6q^%&f&AEz$v}-WfO;A|EdfF' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_MEMORY_LIMIT', '256M' );
define( 'WP_MAX_MEMORY_LIMIT', '512M' );
define( 'WP_DEBUG_LOG', true );
define( 'CONCATENATE_SCRIPTS', false );
define( 'AUTOSAVE_INTERVAL', 600 );
define( 'WP_POST_REVISIONS', 5 );
define( 'EMPTY_TRASH_DAYS', 21 );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
