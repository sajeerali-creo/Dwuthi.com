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
define('DB_NAME', 'dwuthinew');

/** MySQL database username */
define('DB_USER', 'dwuthi');

/** MySQL database password */
define('DB_PASSWORD', 'calicutdwuthi123!,');

/** MySQL hostname */
define('DB_HOST', '');

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
define('AUTH_KEY',         '/6(|/E#0%QMx)snNH?Z@,DIYNZP[]v0CumQ(BkC+G2E  aD,AUwfxFS$/qU[Y@_H');
define('SECURE_AUTH_KEY',  'B*M]@ST: icK&W^n/7ROI%)*AmZ$,`U,w[>7M;#H$3^>>4qC~Ufka@FvSgC2|@Tm');
define('LOGGED_IN_KEY',    'F#gkOxmxdg~4=>n~;IdmS1C5Q9, U8]Ja6A!t^#w0vVE4C4bG<Dj^Qja[prn7&$J');
define('NONCE_KEY',        'pi#/@^6$j2U}O#`s*&a#lf<!:#&fbGuW~?#xxZ%%O!N8HRX;^7@`7=b$qh1-CBi~');
define('AUTH_SALT',        'oSzQ)@~[.pi$r1hs&0+s}Wr,-NoC<[iR3i`Z_ Q|3Zqi~hr`lgy8>u/SPxXW?;l0');
define('SECURE_AUTH_SALT', '^^V5Ly8#6KEDK0DqIS/Y&oj&}N4PY@>!][Kqa0[?Ali66G0r4c5p0QFVcr)~1[zO');
define('LOGGED_IN_SALT',   '6#A*,5<lWrF)6^B<a8TDsn6vz%~trgI*?h[$2#rCsGA6TS]/t5=J|1O~T;64`+(l');
define('NONCE_SALT',       'h0^e5/eihc7;q5kmOPf(}c/y_h8];!^|kMXKg34JWJ*-P^Y0NvudcegXW`~Y-f;@');

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
