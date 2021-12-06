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
define( 'DB_NAME', 'courses_plugin_ptbr' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         ',Ff[lqVme=;=chf*DnzUAszKS/<t2?<@ZA-;I/|sOJM^n9-e4I9@;UM[IJ21#Nwc' );
define( 'SECURE_AUTH_KEY',  'y!?|lrE.N*ct0PZioo#),K5^ 7qY,L[!gyXMtCtC=&jMc67<WLAxRK5qQYN%~.vD' );
define( 'LOGGED_IN_KEY',    '$!/(m[oOG(Z9CIvDyRs~$MinV5}$y>0l&NdM!J4YR#c&^aVX4UqcJ*BZc(:3HeD=' );
define( 'NONCE_KEY',        'g=1R:z7R^IQn)rS=M!<2RMC%1!(HEBZ3T-eE8Vd_@a!weL0)iqzT1Y+#0k-^C}Ry' );
define( 'AUTH_SALT',        'G5pxt?g7Ta|gTeRI]0aTs0UxDQpO!>bAx8fM:]uQr$0,mkBl0dq+G65<Dl|9zT%D' );
define( 'SECURE_AUTH_SALT', 'PIG,du>nhnP<0SA!(]FFb }V1a^=38$`vOVaeh_czI/|<#eMRZlM@7jGLzqu}6h>' );
define( 'LOGGED_IN_SALT',   'Y(srz|4$zvG+7V|;X~}B%27v5E3)@$:m%%ZzVh3)_6%do$7))>FIE I2hwy(P/<t' );
define( 'NONCE_SALT',       'kc0KgKXd=:BMH])wHkHC;7g2Q*PZN[{^1F(%>3xNhL9H|_wyMCI-y?D,>OP7:jCJ' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
