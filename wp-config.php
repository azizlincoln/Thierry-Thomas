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
define( 'DB_NAME', 'sitemariage' );

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
define( 'AUTH_KEY',         'whoj:e.Z:zze>|C8ztuozkntTm=+C1siJJvmse4*i}/DQEqc)|h{ {~=w-(p`~XB' );
define( 'SECURE_AUTH_KEY',  '9+T=,6W]<qGkuQ73Y8>&2!]d3o&-OmTk~^l<q1:OUE*?M 34IL7[m;^OeRv)YK&O' );
define( 'LOGGED_IN_KEY',    '1O03v4Ov6Pk,|wi;`<U]ND5=mO254Y#u/8F&3YG`PmwBQ|j7Ua9alP;KGeFELI*k' );
define( 'NONCE_KEY',        '@ER%Q-<1=#kb=vZ5EvfZZ0 5{)8$]/IhPJJ/OOfsooK!O7eh@#f>PQMAK&+U8O1Q' );
define( 'AUTH_SALT',        '0Cm?-Sw>&?c<%X~Hb5(=K(+Sey7dX[_pI5j?we2dbsR-0ac/D,0--)p3mUhu`/K7' );
define( 'SECURE_AUTH_SALT', 'f7udX&p-aON@3BYxt*D.0j@X,4jp%InmcfushJ4o0zW$zq]q?,#Mo2rS~^,fapSq' );
define( 'LOGGED_IN_SALT',   '5::|4alr2<)YC]:PY)y<Wuc{!$Td(^:Va?@m}n!qa8;Pb~1cH[d*M`DRZX%eGHjS' );
define( 'NONCE_SALT',       ' %on5Mav4BSG& XZVC1,fUy_a)5e1<6;c=iXo]|*@38~L{b{nf+baC`E%V3E!NtY' );

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
