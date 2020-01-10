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
define('DB_NAME', 'igas_db');

/** MySQL database username */
define('DB_USER', 'igas_db');

/** MySQL database password */
define('DB_PASSWORD', 'LHUWJzJv');

/** MySQL hostname */
define('DB_HOST', 'igas.mysql.tools');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'mBug@rU7(i*(7lzb)Btll&nXizpOjX2HI&waHLV%ROa%9i2b&VqfbmGO*fAlz&eC');
define('SECURE_AUTH_KEY',  '%X#3DCPZau%R6ergH@&4@WQ1znA)*z#q9B%xte&dhOPLvZLTIQvHGx0muxNui#Ef');
define('LOGGED_IN_KEY',    'GKtjff%n@H8sMFsM%Y)HxfMgyO@FDGctQfrJEicqkOeWFt7TQ1H7!@uWL^jJ%WTE');
define('NONCE_KEY',        '62t@0PR@*erMJIOI*LzMf3whXV#AFiloUn*d0O0dj&ZkBllwHtD9H2^US4vvv%B7');
define('AUTH_SALT',        'Nl2wL7)eOKG1&KS3w*W4HW1oPuprjOa#dPvaWDfuCqrJV%vp52bxhun@CnpONGkz');
define('SECURE_AUTH_SALT', 'yKllIKdp%22!LLjr3AXq!uk2&9KzzW9NKqg*&iVY3^05XsXoM6G!cPee5Z8X7Ixq');
define('LOGGED_IN_SALT',   'Az9W2RfA%G6mhx7)9(zlkLnn^YYlEVf#(Oa!*fYHdom3!QqRtErX3gWSDOYB!Z10');
define('NONCE_SALT',       '7UPSqbEeQJJ@Sa&LAMOhJ1hvqkIhr(dByyRXI)@MZ^qXBR@W(Q@23mNXi9F&tR0S');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
