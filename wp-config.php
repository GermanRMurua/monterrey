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
define( 'DB_NAME', 'monterrey' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '!.p<yR?[itMcy%|9WZG_w/rDu+%^aIWJ^I*Nw48/QDeF;.Y365.?6wA]*Ej|K$Dc' );
define( 'SECURE_AUTH_KEY',  'py!C9aL(A{4rHx?1a16?M5^G2VasX.(qeZ1I,`.pmIGpesy]Q`x0&$V/yW9=0KVM' );
define( 'LOGGED_IN_KEY',    '!%_%Ow-q73V^g/y807@`m)K*Qx2nrXM*9GRk0C`Pp(w v ;<s#AsK}Ak_9^aax(Y' );
define( 'NONCE_KEY',        'wAf,3O%Sw?G:*mtBzi}Y5z$h|,k<`9*89v=W&YD>gd{`ZV]W)Mz  %A8T1.$%TDt' );
define( 'AUTH_SALT',        '};/{VN9Xp3,$n5YVUw6%`g]k9wKu8|#x(q3F+JLwLQy-6^c#~^y_/_i.=02a<; 4' );
define( 'SECURE_AUTH_SALT', 'q.^#Fl6M&$-NB12!n+:S&^?S%lmSN $0_9hRtdDY;#0%&@o:[h4@v6(^{&@{]v{f' );
define( 'LOGGED_IN_SALT',   ';]9O5JJU*!:v,:4Sd+*xkw7X:x^&r$ /EwN2 ~]QL#VI`<!IH487_sybad`c.MIj' );
define( 'NONCE_SALT',       'hmhD;jm_E_T[45zU$Wp9F2xC.^oSp{8ewb8#v$Q8vMAjN<GM)1QWcDi_wy>3zXtB' );

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
