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
define('DB_NAME', 'chitas1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '7/O[b&eh{1{*Ib7It0_LSe|G sKY=~JGw2+-wl&*y`PNDX5WZ9:`VY*dti-z(+:K');
define('SECURE_AUTH_KEY',  '3&VFTF-5jT:,^&r_m1>n}i0T#$}/Tn$=^1mG{.{B.s#eQRCBRa*gE=,lG8t)/0SB');
define('LOGGED_IN_KEY',    '[M#P%w@+lxVNBdMdQl)/~E=|]VRi/Q[YwsD<LG@#%R3ka 0;8fjh^?t@zMbgA9R?');
define('NONCE_KEY',        'dJ]3gYD[T<hMBKU+|OSC55%!4t^`fZSeVYSFO<~|AA>oX2MfHUc~kZ7xLen?!Rn)');
define('AUTH_SALT',        'u6)=g|w%5Z7^8> M[qF!TIfYxKJtQs2=Equ%s*y+wn LMv(!1/Y:vJYeZm_<jE|*');
define('SECURE_AUTH_SALT', 'EybBCL^{dK/CAY/FA7^lvkqEXsn+M=#U@iSt}`slJ KQ_EOk>qa3I9slB7xlju}c');
define('LOGGED_IN_SALT',   '}OHa:!;yHVonf6PYL%8uV}H0T*7:w&%MCOJsbxlguqbGGcVT&*4Xh|zr/uGV%IH^');
define('NONCE_SALT',       '+6RK#j*~o<:*VT7Y<]%7UgSOFXg]%uvtDZlXY?-axFgH(Wd@7hM004=)Q0*7!4(n');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
