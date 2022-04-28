<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:8889' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'FRK<zr}yGq</kM{t1SdY7Xeka/7G}u,<{=3frk=x%]qg_W$zpY/RwW1/Pd_%+:(5');
define('SECURE_AUTH_KEY',  ':lGf.F_>.pU^}PpWoioF5K@,o%]i]zI4GOF@UD]MsFCaVsw9$F)0Q}q59bIu%RUC');
define('LOGGED_IN_KEY',    'fZA0d<}..)RMc(.X:5+Fnj{R{:}7GB9mb#H4w:vo3}1AvsYjTRp60V+hK5JQ7:2D');
define('NONCE_KEY',        'y98PyY3XGZY1>wGG)v}k<6<%g$MJ)[Miu,xOOWlUw9^jb@pKsXue_gbfcooMY1u>');
define('AUTH_SALT',        'rNB5kn$CS]lt(%4bUT6T0Cy@rIK[#43W>5@XO/Zg9{|s8y:_>vRoy]mK+w|4Wy$J');
define('SECURE_AUTH_SALT', 'Z+hn]7:uo)HSi%QWrh#LSRVM(Q<F)}PJ5wwrZkH)UOB2LR+3z3)>^E=3V<8Fy/OZ');
define('LOGGED_IN_SALT',   'p#<[Q+ykH0HT<B.l45Yu#YTBK@G9^VEgA^RQ)[1.l9LX#C9k8DAobUpmRwRI<Wo>');
define('NONCE_SALT',       'M5E%q5:%j=UPC=z{C0Ue,#]GcDPPZ4CmfHi^(X>SXIhZHCGJ2bnrGZyjc(z2m1J<');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
