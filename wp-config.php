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
define( 'DB_NAME', 'demoshop_db' );

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
define( 'AUTH_KEY',         '`!dm_[B@xF^7~S?I<X0=3P(9VT@2Ev/V.Vh[_^a{HCDnsf^bCR_u;_+yq5+E<&PA' );
define( 'SECURE_AUTH_KEY',  'Fj4> <V]94~;S%$d[i>u@.::u=t5>.+bv>z(T4hx[x:2M93ZKW75[muA?|i ){EN' );
define( 'LOGGED_IN_KEY',    '9ZypuZ?71Eh7Lt;+h:JOP4P`EN$:P2~QP1}VkYNoh ueFaIZjN7r`|&)4%0*mqy{' );
define( 'NONCE_KEY',        '*!*1Dj5T?QK/[V@twd )fDN?w$Y8~bax)*l>s_-^o_AGFNys*NIE*H&12bF%[b*L' );
define( 'AUTH_SALT',        '!YRA[Kwbx3cM*38@bexj )UhV-*2-HJvvaM1TKl~#;<NI<)OrTuc4(f5+C:aDJ[3' );
define( 'SECURE_AUTH_SALT', '_yNfj9tbGnDfZ^i~q7%.acGXzA r[65-GmcIo9(h{tH{8I$!/{VZ)%jYVOaPI$4|' );
define( 'LOGGED_IN_SALT',   '.n:94;JIIeedO$}:j[vc7-I%N=_/(>jq2>L.sc2XG|F3ck+Pt)`EK2J/,m~EBd-H' );
define( 'NONCE_SALT',       'Lj!d}Q_r{V;t*IVHaJ5Dk.l8(k-.)Vsa`?m<~#9471q:g7BqT/br=etH_Kn#v_Sc' );

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
