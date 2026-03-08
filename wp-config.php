<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pandasvape' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '_E(dc<&RbNw3HYTNk|0@ DAwHF5,ZY#3;X>:gYV+zI^j.I%gbh7YZo<D1`]!B_u4' );
define( 'SECURE_AUTH_KEY',  ')z`3Y9h+N,r:}&P?1i]x!C{=.Q/~Tb,E%M:h&v1+*}.~k7+:i|G~z d~[n;ag9y*' );
define( 'LOGGED_IN_KEY',    'SF:zsW]w`/U3c&jrs8s# [l Vs8(K}%pPji=?t$f^~kNju|@c*yMx-pPD5Tcaz<O' );
define( 'NONCE_KEY',        'l4$6dx#hkNfObup`#5<GE.=*3,z[;kY{#bnN|P~G&9zm56B.#^,/9H$eEmVgV1={' );
define( 'AUTH_SALT',        '*jwPK%4Eu3{SUCz>{C_ZmAEP@>gSVX4*Y1.vRjDq:R}{nNw.7[UI*:E_};pm#VGg' );
define( 'SECURE_AUTH_SALT', '%EsEH4e?jE^FD%]rma(6IFDg3rLR%j%[RS#4m7,%O~mx/2%:)8<=+~<RmdTx#aZq' );
define( 'LOGGED_IN_SALT',   'dDT86-d% ek%G>m.,9n$f),-Zwbqj91qO-lk{pppo}Xz?xq%@cQFYD5&J#5ZM^v%' );
define( 'NONCE_SALT',       '.C=7-:/PMeW3Q;YztI<D;9dPgn-D7%>vOr:HP{ OO5b#2P75Bt8>]k+cM]MlCx(n' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
