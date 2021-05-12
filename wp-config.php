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
define( 'DB_NAME', 'eshop' );

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
define( 'AUTH_KEY',         'Xi+?O%j^XY,=g`&W_s@%}XDK1k*;P<o{0_^h8z4M.qU)R1K8go37XlU.Q}{qt[~-' );
define( 'SECURE_AUTH_KEY',  'G! b4=]`~%0-~n$D&?XT8@5Es:d1U2sGG82;L[Sx^uV9G-S^GX>I,R9y&o~m-47r' );
define( 'LOGGED_IN_KEY',    'WAO ddIQLR{gQvmOwRiK!GQs5PBr3.mo7-t>Lw1:0DQRLRp]M_0gK)U,5ayCI@E`' );
define( 'NONCE_KEY',        'T.e=F$SNIo4,PVFJy#.ra/E9~[C0Tm.4Raf6bEY|=Lkqi(+hg2 R2fD bD;p?y~A' );
define( 'AUTH_SALT',        ',}6H_j.:DY{PLtE+p)l}v{nby5o36;-A]?gTST-7IV%Q>a1+xW>paeO,:BI;$?Rm' );
define( 'SECURE_AUTH_SALT', 'f]omj9Vyfx { GXb{ErC_GFc6A#O^me]}j[.y$S_==]JQ/R{_jGYB?4$N;5LX&ny' );
define( 'LOGGED_IN_SALT',   'Jt?KPK|f=zQjh*pV|VBq6Ln&?^{5F984z<l 0!s0{?7.<{W^rHZD(^YkVH<anC7@' );
define( 'NONCE_SALT',       '/!{>$M#%vpLT+^p4J.O>`uKfi=@oy#l%oOa7JwMAW|[$/h3(/v&k+pD:],@l6Qs]' );

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
