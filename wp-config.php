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
define('DB_NAME', 'tstesting');

/** MySQL database username */
define('DB_USER', 'tstesting');

/** MySQL database password */
define('DB_PASSWORD', 'Ckq@g152');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'GkLta{@&szrZR47|`WGFjh+nfIQL@xrvR1WV1r~?)c046fldP&r 3XZswdcf9J=#');
define('SECURE_AUTH_KEY',  'KFRB6qWLMx*11[>T+n{0D{`>mcO-M)DQr+J.N.z+w`M|-syi/ =P:D9v0IlmS.(.');
define('LOGGED_IN_KEY',    'HbKm7+:ilE]m_c1n$;(hPVP|fF]+GT,UN-))W/E>>cFMF9n+M(}2BpYD>.)-r SU');
define('NONCE_KEY',        '1Nxs%|:bL(6rgxM8wGD_hZ?+]<F[/Lo]FWb>MMc6jh&?nDcZtgl9$.FL0E$h54 {');
define('AUTH_SALT',        '?:}I~mC&RP%Hy_+aPrk$hdTgsE:X-R:oN+`>rP>^Q. rne8AN<}ulzWyQrs2sb95');
define('SECURE_AUTH_SALT', '1ww@gqEoU;a4Ph5O$3;O}hq^48as4Jq7jjutbocuwr6hu,=tD(Z!XUIkAV(BeU,S');
define('LOGGED_IN_SALT',   '_3<3sUg#pa}@T<`gq8i_A1Er}Jf $YjutR9Jy.RestX(dq M:YIPn3=e>p`Qr%AD');
define('NONCE_SALT',       'kiL=uL19WfXey^up`RgI/U$gotnC>1r*g+*C6a,t+u{,j;C_>3T!N^zV5a[1_Aj<');

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

/*
 * Restrict admin control over plugins and code editing thru WordPress CMS.
 * Stop all auto updates to WordPress core and theme updates.
 */

define('AUTOMATIC_UPDATE_DISABLED', true);
define('DISALLOW_FILE_MODS', true);