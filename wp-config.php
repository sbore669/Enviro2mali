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
define('DB_NAME', 'epiz_32975058_w225');

/** Database username */
define('DB_USER', '32975058_4');

/** Database password */
define('DB_PASSWORD', 'S)5)1BX1p4');

/** Database hostname */
define('DB_HOST', 'sql302.byetcluster.com');

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
define( 'AUTH_KEY',         'q8dl91gjfzxiyzt5twi3hjhjs6dml3c809sx2xksi7kethhcfw5hjoaetb7zn68e' );
define( 'SECURE_AUTH_KEY',  'bjauz5atxmothgmhrkgxmhielmsa8rchgs6eospdtjgtvrqe2ppqhoz2obxjerqz' );
define( 'LOGGED_IN_KEY',    'eurk1p9ay1jandtzeftiljjvkfbke8h3i1tlas1tkaiehdjond8i8jkejunhtkyi' );
define( 'NONCE_KEY',        'ifvkah3ne4x5xszdiwm1bkr3tfqrtujw14d8b4bl3t4w3pv2aujkgbggsj1me7cf' );
define( 'AUTH_SALT',        'h5dggcpniin5ry77z57wpwp7ezcsonv4eiclylqm4s5zbkwfs1sw7eakrzxpqnk9' );
define( 'SECURE_AUTH_SALT', 'j4slwk9ocskw9gejvukxaxjexlpkax4g52deagi2yfyqqqmqh7x88ljevmjmyz2h' );
define( 'LOGGED_IN_SALT',   'zya0dreugj6fjnc2wpblvrx8887vepzgahsqgkbg4lnyhoifx6pphsyv9mrr2dne' );
define( 'NONCE_SALT',       '2ni3jaxo01mdnwdtzrddjmvtw17nioygpi4ybrtpihvggc0ydb5bajjyvpfae6nm' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpjj_';

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
