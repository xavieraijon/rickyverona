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
define('DB_NAME', 'rickyverona');

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
define('AUTH_KEY',         'Jy)y|Le4`6ms#P4=6HUy8zcC|la5_JN!+C;tv-b?rDRBe6x~89z=F1%r^D^mhIJr');
define('SECURE_AUTH_KEY',  '-wW!Ed3ny}l%4Qi/+D.I]j}qO1mxM(bNs0Owm+WM;$_c>|*0dm>#al9)B6&h=Rt/');
define('LOGGED_IN_KEY',    'Z1|1z79CUF6nFc+<Zx/W+$X!$7MYChciFfyN+WjtkrBNs26m:}*zvMk812r({_ai');
define('NONCE_KEY',        'H!6wqVUO?Zk8sO$S}%=^HnlV2. YB$1`Mkhq_g@q2|h v|]dT65?x`SH|QIlZX@c');
define('AUTH_SALT',        'W2-yo2c86z!Z:><*(M?4gOt W%ASE>O~|~m22wD]zfz-_:vXUG.O6^n^v-?#85sG');
define('SECURE_AUTH_SALT', ':+kDGkY(XA$N S[n*|!Hb;5n-PcmQ _kxPcN$W(7i9Fb]/A4.s+F=+6$~y+a,|BI');
define('LOGGED_IN_SALT',   ':^4Dt3S{G?G<e#zDi{O_axU/qf d6^#4(,q##p^;ECj`j^~+j$Stm)a$HN#^->@5');
define('NONCE_SALT',       'c|gTG8;E]@+YQ{:78EL~m*Inmx_[+uD8[:T*O)T9G{jI|7K6TW?f`{Y/7j/A)~FJ');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
