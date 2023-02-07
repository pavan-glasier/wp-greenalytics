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
define( 'DB_NAME', 'greenalytics' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'soD3wmzTVyp5TiiyXM9WkmcP8xx9tjdeKKBOaUlNCoKvqiFjudcb1wFSuqKU31Rb' );
define( 'SECURE_AUTH_KEY',  'k7qrQ4dYDiqxAesdDRjUpJ8iFrvWKIn3b5dPLCCf0EPCGNyyPeedGWste8qXnktM' );
define( 'LOGGED_IN_KEY',    'QFs5MDAKKO9sNK31ntnPStylnQSn4ScR63Ab11LmFYarmTNuRU82kmHag4ik0HQt' );
define( 'NONCE_KEY',        'tJwUVat02i1akWjFsi8QNRLXAEAxIF3Sdtz5rdvQbm5YigFLH9XgIRZV4h14Zfn3' );
define( 'AUTH_SALT',        'V78Pd3bHeRWG9P4nlMLDXLsMPQupG0ZLacrWq99N0dQLJUwlVlqRGPmBtWXLvgMs' );
define( 'SECURE_AUTH_SALT', 'fqGe8NDJGNsvCPtLlyGM6mCeIEnkkovInjUbyZ7VIsdSO7Fgofwx9jO0FGjSrIOR' );
define( 'LOGGED_IN_SALT',   'VBFDdcfKhX9cOfPRoScagnr38OLfti9GdrcGiu6IIOEEa7EFcpwtuN1iOnB8LMVG' );
define( 'NONCE_SALT',       'qTisvQK44O2AUyEZ67qxhd8C1rkDPKEZUtT2NZdzic9bLT4jhpw1oszYsIFYOzhQ' );

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
