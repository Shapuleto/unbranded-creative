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
define('DB_NAME', 'wp-ucw-dev-01');

/** MySQL database username */
define('DB_USER', 'shapu-ucw-adm');

/** MySQL database password */
define('DB_PASSWORD', 'vr4stfdB2nQjBNSF');

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
define('AUTH_KEY',         'lcQOW|m>J-$4f;b<y/2U,SFY*VCIMPl:b&qn#-v2@oO~pzkU(cW/~wX,tw#~.EZy');
define('SECURE_AUTH_KEY',  'A/ ^N%pW!.6hf*/LN$Ft-1Pb&AtM)`~QFkRxr8{7D!QDI?pA4P{a<6}Y+q2&$vpw');
define('LOGGED_IN_KEY',    'p6Na-RpoJOPksb`G/d=7F%tu*rRi[h0;.or:>Ju NAO^;B@*8:`{h9p?o9}(2~43');
define('NONCE_KEY',        ')wvdc,JVS3)(8P6,^2@A0uDrWM90de%2J]{G|NAU3pK[Elh3&3$EPpZKM3N3CTr_');
define('AUTH_SALT',        ']t4jjoFl+#g-aMIl2n~T*FjaA12Ie7R)wC;3&xUpMIfAHDn*TQ Z8ftQ!>c1>J61');
define('SECURE_AUTH_SALT', 'w:=H<{IwAl$P=Bs>D!;v9@g(aciKp~/:@fC |VQzLp5]KIstF(=g[0QvkG!-Venn');
define('LOGGED_IN_SALT',   'WG,P]pYbEFxPjZxzR)Oc/#~PQNqc.rc%l<w[Gs;8u*G9F060gWBo?`TApoLBlH{W');
define('NONCE_SALT',       'UdV:+fhFhYJDiI_PP/_naZj`[{D]{~D7Ad!Ts4hX>rbciFmq-mTO%al|)9Gd#Pop');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_ucw_';

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
