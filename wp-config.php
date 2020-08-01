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
define( 'DB_NAME', 'agency_gh' );

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
define( 'AUTH_KEY',         'QA[67M4Up(-JbIZW)SRbTXWKaYULPG9u;8;KBUlKB}MlJ#::j9V#?|EU;2?+}7I$' );
define( 'SECURE_AUTH_KEY',  '|eU Ziz6wa]V?8wJ}?*7i$NLof7h~hHUZoD5EY;I`b:%*# $uw)|(gXins:)5/jM' );
define( 'LOGGED_IN_KEY',    'Vz<vv<{SS<=w1]zcE+<W,hk737~d~-tF`U*e4Y 7KWp`-g{otu%{Hl>F?:Q$+h$Q' );
define( 'NONCE_KEY',        'sOAkk`Bdo%2|]c!SFKkkuL_14:7[)U,?y$6IpO*=3+>?A,+Vd@[>Z&;mQA.VabIN' );
define( 'AUTH_SALT',        '6B_s!#r`?KS2b/xI4YicKeSOX51Yp3_f]S*7Q1]:Icd@XJDeeJ3>bG_66hNj&ehH' );
define( 'SECURE_AUTH_SALT', 'i]zGBEj/KmbJoo,S|;SXXl2NDag]^#IzAzQ62FD[]5T>%VxG;/!@<aWf0D,c)QU)' );
define( 'LOGGED_IN_SALT',   'iAJJ_b)+g9ACrHiFCGIzT_h.=HdxgfH)!tvCFVJ;HkC{doqb5X`N3%LmDT+`5@!c' );
define( 'NONCE_SALT',       'o9PlN[5Gk.U>B[LBJVRwf}mU =t4lic4u#sH8Rf?<|[CrXk?BQT)+)pX<z][,~Wf' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_agencygh_';

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
