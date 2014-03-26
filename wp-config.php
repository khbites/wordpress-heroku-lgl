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

// ** Heroku Postgres settings - from Heroku Environment ** //
if (isset($_ENV["DATABASE_URL"]))
$db = parse_url($_ENV["DATABASE_URL"]);
else
$db = parse_url($_SERVER["DATABASE_URL"]);

// ** Disable Automatic Updates (3.7 an onwards) **/
define( 'AUTOMATIC_UPDATER_DISABLED', true );

//** Disable wp-cron.php Call on EVERY Page Load for speed ** //
//** I call wp-cron via wget from a remote host (in crontab)
//   You can also setup a scheduler in heroku
//   heroku addons:add scheduler:standard
//   see https://github.com/mchung/heroku-buildpack-wordpress **/
define('DISABLE_WP_CRON', 'true');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

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
define('AUTH_KEY',         'fgo|(F6g5/P)Y-t43zssjd9w9wbbC2l!CwsHAQFnU{q2F XN=z:4yCl,H.69a$d]');
define('SECURE_AUTH_KEY',  'ThSxmPwNMCjIq_+uJ:3Lo4X?zg_3n-0feenmhehb00JH%L^O8QYy-.rT2q!(hA,v');
define('LOGGED_IN_KEY',    'iZ]w)t/g!8)|{%nH<> 6|d`8a@a<ENm+dhjkhj*`JN~LPu!JC:;kp*1^cpQv6Oh_');
define('NONCE_KEY',        'UPXr* }Q.Q0jdlskdhsjHGH(UH=?9090ß7H6v?/.2E4c$n,#H`-h/.NM#$?>2-0U');
define('AUTH_SALT',        '+<x0v |6V-hi{IKr`^gY 6#J<{|FK5[*~+0ldd3OwX@)vIX7(9^(szAjT:h2#(YR');
define('SECURE_AUTH_SALT', '_bqTQypxytBg_k-<l{Ko~>e3~;T}Ov]+!o={/ bhg Qi0KZ_XS-Ura$A) 0|qpa[');
define('LOGGED_IN_SALT',   '-i5A9j|^h.!f-m^-.dIng7 XZcC|#no!(y:VQ~-99B  dw2^ze2nv_d_U+P] *5x');
define('NONCE_SALT',       'E%wQA1p^;|anOCFIk>yIwTm3wS8DzWmWL>IC8fB/M*Therk#}c2x-+l|FD]qt</F');

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
define('WPLANG', 'de_DE');

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
