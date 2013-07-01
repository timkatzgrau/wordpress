<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '~X-4h6D+@dAQ2C5jIFC^e8s8Q =Z<>LlO$sC!4ei*x*f8D[f9g|&E8E3jN*|:K[l');
define('SECURE_AUTH_KEY',  'L/=30CAi1/v4c%H[2%gs|.R!z-G>!cMfz5ev4+?M98JQqMz-` 21Z-@%o^3]QLHc');
define('LOGGED_IN_KEY',    '~,{}4mxZ.k}Cez,LhI-P[f05EqbMnvckd< A&a%<m^xw]@CSec-0V6+|!FisHSci');
define('NONCE_KEY',        'F4k/&nh!wr5Ep&@T4NfU^j$xIA1xog7wmgVFLedE&fUUO2+8(L:|y,^)xBgNX+kU');
define('AUTH_SALT',        'i&T]]].p%xl.:t&.]K]))>LDw<x!zC*5$Cr%y1|9&0}L*UnIWnRP=@ST#f-{j4}Y');
define('SECURE_AUTH_SALT', 'UIM FtGn,gc|5)O$7m+f!9RX .}P]nKw6BmojT%7q5N^2tF`$9|_fTZ=TUEIi.dx');
define('LOGGED_IN_SALT',   '!F|_Uc:G?XRi#r2<,+~@-r]Ya9UsW<>zf_skn=!;vc|2hC/ejB$7$erl+-F?BL:5');
define('NONCE_SALT',       'x^ 7y>Py;olZsY8|xrO3eQZ#s1b4W^FS~+r*kd>D.4sw4i^k?N>K=:w{_kFpq?9+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
