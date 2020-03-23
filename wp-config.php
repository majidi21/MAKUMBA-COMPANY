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
define( 'DB_NAME', 'makumba software_db' );

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
define( 'AUTH_KEY',         '$iM*4C{L/M9C<MWvr|4YT%L;UOcblP NvN,F7dkm3L1{X<WdKsZyc/Wd)pqJ?@z.' );
define( 'SECURE_AUTH_KEY',  'jM]^o?=2?Qh^s1`cKqGGwZaVt2l^lWR[F:%4g,FvFR8JLF4H&Y1n8a/`A/ulFf]N' );
define( 'LOGGED_IN_KEY',    '6(M,[Z5hW_yoa)@//TRS(`IsCra`sNqG(h(]uQ)eXmh7,,4g5H+&E<4%8HI/|cSb' );
define( 'NONCE_KEY',        'Y2n}e+37sH0{s2Y= BjaVc6u/zR@1z^n2>/d)8(L*sB@Zk&YkluQw_hl/:jrfyVS' );
define( 'AUTH_SALT',        '48j)iWq<P?xt,}5v53:,i<w_NjQN,39]p[h<9q01[hvRyz*iyV1W!r0tP8`C.rTX' );
define( 'SECURE_AUTH_SALT', 'a6P]UKdjf%BP6}po,V~vkxFE 8tcK_TM~!<ef|aFa`lrf+)W0Z5o90L$_[pjI]P(' );
define( 'LOGGED_IN_SALT',   '!s]CQS!NY20I@GT3=B1 C;gk=X7&+#r6j62b=z[;9oZKVi]9sc^r-+ga>@+w]5di' );
define( 'NONCE_SALT',       'M*R,|%7>f.%yjqihI;FAt^=MEG_2g8iU`u1LcgJ*i.lb4r)cdYM[{!iUEkLd.c&l' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
