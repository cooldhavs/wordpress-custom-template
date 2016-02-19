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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'vS.$~f3y>:yZa9i|)V,y%+yXq77G %Tz[&ETD~68ODW}-~/[?0sU_/_}GL2Vd8$i');
define('SECURE_AUTH_KEY',  '{:$+7gd-#sgeo+XMWl<TS-nDJiD:-y`eK,D.@#3gNAAvpXQQdju9|ny}$J5~sd<=');
define('LOGGED_IN_KEY',    'n1`)`(dn:$-o3 6}AZ-}a|vg|0V=zvo:#Vu+/$x8U9Ek%?_2GGWo}!]-L# 6@5|e');
define('NONCE_KEY',        '|L0l+<jk!UQdEtns5bkJqO2v:_CFS~Y2 nesLO9Kv$}6b?rl4HneVXzYvElmPT+-');
define('AUTH_SALT',        '<xS2yH =8K`x<5eVncAJ~eS& XkhMs+~l&P#6;Vu_).@T4OgIsj|Ycw6Q&3!=RU5');
define('SECURE_AUTH_SALT', 'T=lz|XoW/xxtzVl?ZF]6^]D1`<rlDB]w&N(Cq,7Ub0i.8R`XA^JYWuc=t]8s^9g4');
define('LOGGED_IN_SALT',   '5iGc.@T1JflFWheYp:~zh]q<kbO/nWaVj<e]{|L?uA_zf?!vJJs:^EHFy*XEC])P');
define('NONCE_SALT',       ']6Uu}}A|6SY9k`]Zr==pW@pM~[^bP9GQ:B cwU,qZZv<,9$G<tKydA:4KkdvEs<0');

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
