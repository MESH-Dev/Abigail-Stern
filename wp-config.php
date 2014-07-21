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
define('DB_NAME', 'abigail_stern');

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
define('AUTH_KEY',         '&iqKq*@lic9ct<vA*iV+!Htp.FNqmFOA-VrNg#prYKGCMY&34Fok[cZI|Bv$ybC^');
define('SECURE_AUTH_KEY',  'v? 03kW3xR<o//PpP,j* --9?]LSH|>Hxt7i^LWT!;M]w~S&0]33+wpH[kj~C ?0');
define('LOGGED_IN_KEY',    'bqx!>+a5^DO9$;ARdW x=)(N;2^^}8<H|h;6+U Q_7N)hR4u1vho$br^M3Q~:4N/');
define('NONCE_KEY',        'Q1I ,hF8Ya@2Imh]6`TyH2>(k:fF6>cpS7/PN5FsOM85CEy$fc40^aC%sk?[y*hk');
define('AUTH_SALT',        'ck7;;M}AA4,-?R{6|TR(jfLgn.f~GVKL,%&/8bf:)79g55-pXyn+E`Wjrg c,oWL');
define('SECURE_AUTH_SALT', ')<,(}-n.lppqS|e5d$%;JBi5*;(:5q1 8|;$A`cNHEMVb%c}A#)LH`I04*#,)Scp');
define('LOGGED_IN_SALT',   '9nN7b1MhZ4/rubsC3B.e7^?Za.&$RI-[AE(PQ,in8Od9_,y~Z>KAc;s*TWh1{)RS');
define('NONCE_SALT',       'rZQ1^uY`7(1p.H9#}FyL oc(v;L8IHi f.6Yrx:g~LD4%FGiOf^ZL!hL`w[@v(vd');

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
