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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'AvcwP6Wq*d^jglugov]jquhhi|F`W,uP5LIu7A-0;oAO^5C5,#<BXh~uH%M*pO8T' );
define( 'SECURE_AUTH_KEY',  'hs#cd9-~B4+7W~iVvO=esgedzwQn[} NR`I{%f~[!0]bB-gyPFQq_%]aqSL/;;}a' );
define( 'LOGGED_IN_KEY',    'VR2B@UB|TriK4K6XgM2/JxC!Lb|vh(L$O;wPI6a# ee[sWYWV2Wm;g(6Lk!Z[}|e' );
define( 'NONCE_KEY',        'aj{b5e|UXHFU/vcOjv#k9-BEA([3PH9nnk&ML`8:A`6{uO3O^O<TaVW+qgQVZf7b' );
define( 'AUTH_SALT',        '/paz)nZ&`4+C+J$bbV.x9yQ:xT^lK>guDVg?ZnVMsFIgE@k~Pdi^puLTb(uj+I*Q' );
define( 'SECURE_AUTH_SALT', ' Xbe%hx9B}Kdr@`3SK;b)mc_]y7F#O(R(L.K:9G6^[;Aqu*?@e&4=pvai:yZ;0Zq' );
define( 'LOGGED_IN_SALT',   'ZJTU+;S<!9nm8anE~4A7an~ W^+yS{gzibM|?2/AVJE|KS7>fC-Q=5&&~Nv7.qoa' );
define( 'NONCE_SALT',       '~=+cXxYZqQ:QI:bj>V+T(8QGV<[FO}G46E6ai-mTNYM<_*./ym[)QwBjG{+9H:NU' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
