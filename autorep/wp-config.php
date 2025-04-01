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
define( 'DB_NAME', 'autorep' );

/** Database username */
define( 'DB_USER', 'auto-rep-admin' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'RrC&SJ ;uq>iad3gvS+C8g,Wv%z78{hwc^A%VWLSxf@;H]^D4Bd;StUANX_J0B<U' );
define( 'SECURE_AUTH_KEY',  'ev15ya>3WY5=n6829fz@;<G&Vr*OD|[up85t{70/]=bENs4!]&%NB1r+tG28+;?U' );
define( 'LOGGED_IN_KEY',    'k$)0zd=iP3Tr)i,Qoi8-HYrY>fdE,4`W;a-qH1XOv7jw0CadM5{drU7qtazKbY&Z' );
define( 'NONCE_KEY',        'iB4Q5.l/)M.+X^c.hE?Q#e 52ubTwel?59 3M/l=G%f=t>k]S]o?p8(ckhgKWu-M' );
define( 'AUTH_SALT',        ' cwbD$PVDV4$<K%Dk3|T?aBsPPD 9XrLEqA-~)j@Bed]nFiR<v~@o Lo~<vs2Ok^' );
define( 'SECURE_AUTH_SALT', ':Zl)?=uEcbn,fM`?!!O?=UPmCxT[]ajK{ G@ti-}P3$SgckP*eNo0KcMjY[:aMw+' );
define( 'LOGGED_IN_SALT',   'Pk4ZDS=>VnJZ,=1B.gKkcbD[srKBUph_[{B`@R3KdnBI%dd5Z)xdat;]$g@|(asU' );
define( 'NONCE_SALT',       ')p_Uc?N{V)2N>>r7Z&c@a&Q1i}]cpq:D14)Rorf9OOBFv,)-nQt8D,+_.e Rauf3' );

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
