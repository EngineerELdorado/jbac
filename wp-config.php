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
define('DB_NAME', 'jbac');

/** MySQL database username */
define('DB_USER', 'jbac_db');

/** MySQL database password */
define('DB_PASSWORD', 'kalengakilungu2712D!');

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
define('AUTH_KEY',         '2o|vcnv:SSpc]*J3U05a|++ym=J~]BN:i4gzJ^y]Cb`$m>n/#Ft`wT%w83x+.^fK');
define('SECURE_AUTH_KEY',  '_kQ5{QENGmHYmQyjw>!3B+,uyX^PY MqD{aM?t(YZ9Ja*<oPLG:(mh/meTDuy+ 0');
define('LOGGED_IN_KEY',    'IC/YV(SR),F7cdrjiEHk?2$Z~aQI|U62g]j2Pq8ln/h]TaN!Ck{]RGw h`py;tCw');
define('NONCE_KEY',        'QIUaA(B.%s{Mw?ec+t4;i>_Bn[Cm]0X25iY)h)ct23qT NJ^p .oL#?BF7Nw@m>B');
define('AUTH_SALT',        'uQKo^o:>n|sw8M!Efi3:w;JBDr.0p de8G[#S2e`o^6eGl1wXXxEhR|-c2eiTk!#');
define('SECURE_AUTH_SALT', '&oevZ R&.Y=x,DlFu^p4|>g9fgf`7xaK#X WSXBxo?ba>D%qu6jhAbIo6=cpQjsE');
define('LOGGED_IN_SALT',   'D{|j/*-NI[iBOoGs@tl:`h5h1E;2%%ItRLXOj,$s=_,*8&{Qb@|S3&(9LM4Wznu:');
define('NONCE_SALT',       'k))z5q&XIm&]PK[f/i(dZ=/1r* cwaRR7ocs&<B5Nt%P@`^$b~SO:_/($#$w[46x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jbac_';

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
