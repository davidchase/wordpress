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
define('DB_NAME', 'wordpress_db');

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
define('AUTH_KEY',         '|-:*?1g-B_L&s3p};Q~FPFnP8xU+$MEE|c3)$IX6A|3^@}>^hFbU[}ykE,]e{HTU');
define('SECURE_AUTH_KEY',  'Ea/MggrDI%[Vh0B4Ao&z%84+wzHIO||;g&,L5c&qLqv*>z+IW (VUR7:K5utZ`#A');
define('LOGGED_IN_KEY',    '| .Zt<%r=RPil[#`>4)Y:y+c:+0cCvGx:q2>DzH9JU1]dqf]BR#d|TFT33yPS@=~');
define('NONCE_KEY',        ':Ia=B] Z/3aOSAQ#,pkusb50--&M^)8QU9vuS|W_0`e?wh/i5P]xJZPLq02wT=f+');
define('AUTH_SALT',        '5`)Dc.!S|-Wb}9G|OxyJ5;)pj8|P<2E{k(i<Iky8}&|x>Tx@@q5CuM>=b`rC9IL-');
define('SECURE_AUTH_SALT', '+9Y<4=w+?QOk|1r[t5hMj!-AL-}r(/JUT#9ge<<f|u-F^K@@BbL-_po|bR8)a0SJ');
define('LOGGED_IN_SALT',   '~%ImU?HgUL-cNa@L4d)1|hLq,Bl#XP%J;!0cGpa2(fW@I*4u|9Bihf-@B}K7`Kb:');
define('NONCE_SALT',       'nY$8q>m~vlB]*n.;t+)bE@Jfa[s)ZvK//OiFLEA6MY1b1Q2/Uz;p#rOQ/+}kHp7U');


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
