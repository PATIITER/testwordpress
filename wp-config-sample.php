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
define( 'DB_NAME', 'd3fieu9agenrmo' );

/** MySQL database username */
define( 'DB_USER', 'kptrswvxhvhdbc' );

/** MySQL database password */
define( 'DB_PASSWORD', 'c88c88f547498b2401eb5a06908f03a072bdcb7bcddc2761c37081dd206e5892' );

/** MySQL hostname */
define( 'DB_HOST', 'ec2-54-197-48-79.compute-1.amazonaws.com' );

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
define( 'AUTH_KEY',         'm5!0yeDQq.T)I81W`.BllNhXmyhz9=?4uSKhu:<PPfCR,X-}FFu#|Jr= /7}9rIw' );
define( 'SECURE_AUTH_KEY',  'w$ RIxS>6D77br6i&KEk*D+_k:m3qNbUhmY.LOREe4ON#PfCr!%;c (,|zohd^G[' );
define( 'LOGGED_IN_KEY',    '-z4v3~m#*u.[hsA~#-*fr|RxUnx44Vw+Oe7g?b|SnuZ+t]:#DFM#q&KVb(;Q8<*m' );
define( 'NONCE_KEY',        'OIr9.l(&z`M9qo$!c-mhb:.x@e8RF&o%V*BDAG2gSo@-$D;Ncy1j3`x+*|H-^H*3' );
define( 'AUTH_SALT',        '|Sm:z2}ai@P|8`-,y0zbV/!H9bf36@C[=c)}CJ;ar~c,[zjlyNuvd9qp(_% |o`q' );
define( 'SECURE_AUTH_SALT', 'W6#Ax;tFZ`g%8!<8mBkCZVL+]r,@v L)u[YYw&R^D`1M D-vG1qbB|n*,DT+0ph;' );
define( 'LOGGED_IN_SALT',   '&GRSd$<:OfQgZ|o`.G1_r<KmiTEv)f^RleUO5D%dD(9[f9IN|_FITYYnH>e}J]w*' );
define( 'NONCE_SALT',       '<G)0tq>Cc#,Gqud+A0SVVW%%6;{H~Pb.j{w4zp>W+G`-kw[*:U3Pti,m/iVgIHr]' );

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
