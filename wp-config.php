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
define( 'DB_NAME', 'ispa' );

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
define( 'AUTH_KEY',         '2+)b2#rQjS Fnv1$ /.V;IUL@9LV;i,AU*=)=I#H(WkM-wgms/#)PP*Af@Z?^M]d' );
define( 'SECURE_AUTH_KEY',  'aJ80XrRB*V0;WvQ;ROHd{u7v^C.6Fkcb %,_{2HX?iK/;p!gL !hJ2m-x?IxE+Q2' );
define( 'LOGGED_IN_KEY',    '<ajhFE:f s;Tc4BkL,~:$$xpYXHIR {<Yk_$?ixBhf/&mbaOqGsm>z7D&D j8]ix' );
define( 'NONCE_KEY',        '[IEybE>UEsDd&rL&|_QvH3co(e1{Xeq`hmHgANbG8p#5rI/Vglu8PwR,oE?QhbQ-' );
define( 'AUTH_SALT',        ',+)w>yX-CKpkkUOZ+OI%3D Q5%#9t1PRuc=G)2TVT7c(xhFWmg#9SG?4{5dHM-V]' );
define( 'SECURE_AUTH_SALT', '0-Os@1OCgcO~kln DO4u1%^0R`n`?)KA3tZpyv5Qto:iUD_5UaAJX8s_NR%VJEgG' );
define( 'LOGGED_IN_SALT',   'ygSz_fXXUu%.ezUY#]oqRyyi~eh(O>_EjHkV1V53&VDNriiJNAKWxsFTz!BbY_h[' );
define( 'NONCE_SALT',       'akl}jBvFHjt~u|YR-[G)tG8m<RM0j=eii]Q^;+o^DRD:bG|]Wk7FW8 bNrlAPja%' );

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
