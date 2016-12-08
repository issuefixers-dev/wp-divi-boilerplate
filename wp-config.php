<?php
define('WP_CACHE', true); // Added by WP Rocket
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
define('DB_NAME', 'vulpine_wp');

/** MySQL database username */
define('DB_USER', 'vulpine_admin');

/** MySQL database password */
define('DB_PASSWORD', '2NVMlHJlFZXZ');

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
define('AUTH_KEY',         '1m7M8$p?_=awne7o`Pwd?=2(!@bHJd+va5RU[f-YsgTLrW7+gTg}4untt4/pp<Bj');
define('SECURE_AUTH_KEY',  ',T(loYA[<qR19X9;)AlI$!t18]9H^MPbupG.MjiUe &xMPRfV_mZ74?lh{pS?:F9');
define('LOGGED_IN_KEY',    ')Ar5Ixb6SAq(E`+K:Cic$uOmS64LbfVOVN^TO-26 B~c$HYDbC=cdgcP5$Gs5;HE');
define('NONCE_KEY',        'e8l^~N29RD IKeH1pPlg/esZ{9IJ/u?/ihD{,}ROTN^E87Tj%0z5N3F+]{yDpdDu');
define('AUTH_SALT',        'ty>M$K]:$c}_=KZjB)UV9S97^~*rgu7U!t~[heP3=Ka`m5IFqng[BxFS/*HTnGxc');
define('SECURE_AUTH_SALT', '&R~|isktXO f&F)mCaWi%-k2z<g2DHf?ABxV94W:D%mw8=IcFh[L5/t22pYBx8j5');
define('LOGGED_IN_SALT',   '4b_L3%hBRd62Y{f}*mYTsB8${ZqhR+JGrcB:UCZsj`yFicX2tG692O@U7.9Vz_ v');
define('NONCE_SALT',       '<9w]M8}`{|j_Wj6:2$yO<tIh~cRO*N[SA>K=@CCd3qXOqcIS7=3ujFD+:R#m7=Go');

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
