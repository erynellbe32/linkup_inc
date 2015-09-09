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
define('DB_NAME', 'linkupinc');

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
define('AUTH_KEY',         ',e:rB;xi2PfG1scj_cg gqgg)G kKp1&UwZHo&}-v]DZ%5>;&@GgWX3=ph#K|ws8');
define('SECURE_AUTH_KEY',  't!Dc3.?dq-RZvs9]B7N%/g<0;Q>TZ])C|RF+B{Glmj&%LN[R3zAiu0%Kb^$X[T-8');
define('LOGGED_IN_KEY',    '/8<D[Q,y2fq<$P]WeGt6(,!`<oTVYJ=Ekmgw&R:hl(vK3aQ3Y:zH&|~^b+95|ok-');
define('NONCE_KEY',        '(%RX/`@n~k<1%I -sk2}CBVZ:|:+|9+`NU4B}ooS{f2hk|z6,~!+eDB.5zmG`8@u');
define('AUTH_SALT',        '6zNAYkM9WR,j|}}6JOG|e`!Jmc+;MQGaIRTeNn#-^G|06$3kTL_YFln-n*j3C~EG');
define('SECURE_AUTH_SALT', '}P^*Dh!v[-0URP|1Frj`aIEUnoD^Xmt&?-!={Hj[f!`d&p@B*crHeW@QvnqF;LO~');
define('LOGGED_IN_SALT',   'xss%$l5!|Fj)DR$(~|Q6idiWB*r{|L.>/)Clq-XS6R(bgUv6q_A12FqvJdCgo>xE');
define('NONCE_SALT',       'y 1Rr;tLw?u2dJP,~0,RAA?O+2v&a]>@a{)dR8+<<.35..sk(}HYK3SH+~a7[%<o');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sl_';

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
