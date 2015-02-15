<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sqluz_fk');

/** MySQL database username */
define('DB_USER', 'sqluz_fk');

/** MySQL database password */
define('DB_PASSWORD', '123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Default Locale **/
define ('WPLANG', 'ru_UZ');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'oItDC2iTioDQL4pU^~qTYdBloD4p^Bc{H!NY~s20fg13P66Q.$T]@(}ww?~euo~d');
define('SECURE_AUTH_KEY',  'GB,W>Aul^DJ;H2|##4ugAw-9OJ{Xi<l`V?R~QlEnCBv6hu5{|2^K2(IhkhD=~*;}');
define('LOGGED_IN_KEY',    '%%3ZQM=WoJ/y?7EHvvIz|i{ +<r|c5/rjD.l;Ra@v*)NfUusQEt&;*fgU-G9I(wR');
define('NONCE_KEY',        '9iod_Mg=^c34&-Azx2V;N(s`ubl8?CP}_p[zT(.h*oDM~Qb3Be$Bx0&`9a!%L[.3');
define('AUTH_SALT',        '!;H|G|x1b[,][~+y{M<DbnUXLJRgUV_nJZ9.`U_{ wwBIrE@5,GbWC;@arT}2(WI');
define('SECURE_AUTH_SALT', 'xYnS*#7Tn?~`7SjKg|C#>BL5x(CDgtv|tzm{&g05~Inec#mdNMqsp#I;yF7=oOfU');
define('LOGGED_IN_SALT',   '_&hIcnZg5}!6<RS%5;so78_VPe sedrnrt#Akrd6,bZPw^j$bOB~f!{Ol+DfD8zD');
define('NONCE_SALT',       '0cIv`i$tA;%tUX.Gsw_s!u#bxPd~D:syq^+zHp5Si}aE^Jz}Z(!3)~M0^B[6>$*8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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