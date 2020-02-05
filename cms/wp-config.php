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

/**
 * Project configuration
 *
 * Pull the configuration file from the project root
 */
require_once __DIR__ . '/../conf.php';

/**
 * Routing
 *
 */
// Fetch media files from the WIP server
if ( CMS_FETCH_MEDIA_REMOTELY )
	if ( ( $_SERVER[ 'HTTP_HOST' ] ?: $_SERVER[ 'SERVER_NAME' ] ) !== CMS_REMOTE_ADDRESS )
		if ( strpos( $_SERVER[ 'REQUEST_URI' ], '/cms/wp-content/uploads/' ) !== false )
			return header( 'Location: http://' . CMS_REMOTE_ADDRESS . $_SERVER[ 'REQUEST_URI' ], true, 302 );



/**
 * WordPress Website Roots
 *
 * Set it such that it is contextual to the domain that the site is hosted behind
 */
define( 'WP_HOME', 'http://' . ( $_SERVER[ 'HTTP_HOST' ] ?: $_SERVER[ 'SERVER_NAME' ] ) );
define( 'WP_SITEURL', 'http://' . ( $_SERVER[ 'HTTP_HOST' ] ?: $_SERVER[ 'SERVER_NAME' ] ) . '/cms' );



/**
 * Database
 *
 */
// SQLite
define( 'USE_MYSQL', ! CMS_USE_SQLITE );
define( 'DB_DIR', $_SERVER[ 'DOCUMENT_ROOT' ] . '/data/' );
define( 'DB_FILE', 'cms.db.sqlite' );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', CMS_DB_NAME );

/** MySQL database username */
define( 'DB_USER', CMS_DB_USER );

/** MySQL database password */
define( 'DB_PASSWORD', CMS_DB_PASSWORD );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '<a++9j-rX<iTG=-9 dpAWL:^`s;!q>1;31^<nTQt3m|?vI#eWt[GLDK-?Y)W[p/c' );
define( 'SECURE_AUTH_KEY',  '/:c0/I=4&S>QJW$d|eo 3=(rapT,^z*|7wd~hV;0-fy^M9%KKy&D<70Ojh8,>X8r' );
define( 'LOGGED_IN_KEY',    'S|pV2e39Dr.}UP[uW> :>*+]W*@r?>pH|J0znYuhz7p-G0i;ooihgkpWmU=Yp#W:' );
define( 'NONCE_KEY',        'CqOL5o9!-~:o&Cg%^?43G6*%m$+awcQb`T5D|@z-ftM|IGbW&)raNapsBg|g?|gE' );
define( 'AUTH_SALT',        'eNdOQ%- VA-63qnqeLcv3XX/[,`>{XYW/eK<j-2|bYs8) *=/>}{0+!2DgMoBTs9' );
define( 'SECURE_AUTH_SALT', '}~`:&urLCI8qHVRF#}%@[^(s@gfW{mR@ hDWEc=hT!Y[R|1gZ){)#X;03(|lSZk#' );
define( 'LOGGED_IN_SALT',   '~YRE;dq.ZvmFDX}^|^SSxzDGA]r?P<[_#R&9V.XYYfMwl}w#gbi+}.4R|W$bNp|+' );
define( 'NONCE_SALT',       'DaFI#xL2`JKNa-&fo) x83]uu3C>.3W@xhZ=LB+:bs1%R*z@1yvGc *|vdA](8Z=' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', CMS_DEBUG_MODE );
define( 'WP_DEBUG_LOG', CMS_DEBUG_LOG );

/**
 * WordPress Updates
 *
 */
define( 'WP_AUTO_UPDATE_CORE', CMS_AUTO_UPDATE );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
