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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'garden' );

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
define( 'AUTH_KEY',         'hnF-tGU9QImQ{9o3)JuZC9rKByaEeb;~V}_aq/mp|~ }wl#^LRP*sCz09:V !}Iq' );
define( 'SECURE_AUTH_KEY',  '<7/g$ukZM-4DGM+)NV+0a^Q9?(Iz<B,^gCgE;d<RmdY)~_)}VLiw{6auHWg3Y6>1' );
define( 'LOGGED_IN_KEY',    '~7flvT2wHp4&.Q.BxM@UX]9+Edxj_{|J0$vIl{?$J&VleQ15jm=HV%]yiNr{qSl<' );
define( 'NONCE_KEY',        '4HN8Rmzh6wxAJVkrUlom~tyclr^SgN#C.XlW6jgt)>QFQYg5lMcj?LsNjJN7U1oe' );
define( 'AUTH_SALT',        'VA9ws-&iqjVo%FUe`*qgyo*zD}K=w5ytFR-RZ7=&n#~Sh3]j/n]C9N%1K]ddmh[%' );
define( 'SECURE_AUTH_SALT', '?J[ul9ii%B,X<jn?L.G Z84B@].~55Q_<w5mL4RKu<sV6]WVzC AU9|6h0Rpp3GW' );
define( 'LOGGED_IN_SALT',   'oyb9=#Lbw&EvW1|;R=gRX0*g5N:*}z)MMAj@TM%A&O$oZ]. FS!2.sM7h:1&4{Ga' );
define( 'NONCE_SALT',       'cD:vgh6(#5|Zujg2:}rj$bbnbCHq5=oa`7i u8YnJ[t?x%;<:kzqtLuqg?Tx__CY' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
