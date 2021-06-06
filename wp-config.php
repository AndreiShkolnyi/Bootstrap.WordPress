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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Users/admin/Sites/localhost/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'wp_bd' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'gY]F=)1M*(rWPwK-+4da@K5*Cxmeg?$rEA!]KDADD,kJa)@s4$^,a9b5MEQpyJs3' );
define( 'SECURE_AUTH_KEY',  '`x6%+.(#yU#bCOopRP6+MP<0iXZ+*OUJsgns#qKtYj%cc:qZDq4aQ@;7([5pC0(,' );
define( 'LOGGED_IN_KEY',    'e15K2< ~F#43htHELpUDkM)5%O9h3t`e:d)o]W/&58ZzOicEirEgWv2V381@0jrP' );
define( 'NONCE_KEY',        'nfz16DXnS]5wf?PY|#Oix9Q90ecJF]j/8/oN&@#xI{V)klHXQF10gw]]lF0 #?*q' );
define( 'AUTH_SALT',        'wGu6%c_(;.lK,EW6M!rzX|zC.(I#miyf?7L?:$(7OqzTmZB2,>Dpo%{9[/&#R$1N' );
define( 'SECURE_AUTH_SALT', '$gxk33bZKJesfo&=Z0)=ZN.wt@ePbE${o2%Rw6gW+)>v07TGS!hMuLKmBe^kbn}[' );
define( 'LOGGED_IN_SALT',   '#B02W_(b)Hk%H}pA=umwL6%XKna`$^>fB[Oz!??34u<bh,e?+%pFtMk88&XB/w0`' );
define( 'NONCE_SALT',       'O{[=fJ=fM-->zI95NeL$S:]mZEmtQ!w6yrn:.C?F^gj8&|^jWoD-?~2)Y{~taCyb' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
