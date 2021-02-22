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
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         'si~t357C15= krH3G=TmbYsU6zO8y$}!f*@xb,d^{IH><R4gmW[;V/mdL=&%^0ae' );
define( 'SECURE_AUTH_KEY',  'nf_>D?j~)G9>]H6fW?5bi4;sOc)q<eliw5I-;am{vPp)$fs-`Pl6~B$P5*o[4g;<' );
define( 'LOGGED_IN_KEY',    'v:<EQMh_Xwr{=Z<gDp_4EbYG{A>{gi*7{x95w9U(/7 vdSwo{3w6[Cb[`BQs;7JL' );
define( 'NONCE_KEY',        '9FjXRx[NWB:E6s?zw^AyV7EUL?V|p;C~*pVfbnD4aM&dm<-nHlnH8a8yR?pwXbtz' );
define( 'AUTH_SALT',        'NF&;-yF1Os S-Kqm~/^X/eU-X5e#EpQi|l,PrCFO-fZ!=#HH@B>&/ZeZ`qe00294' );
define( 'SECURE_AUTH_SALT', 'VkQq9a83W~Qb&+(zmAEkI!= bWps;xeB6t:o`b0D&+uAXRm):lS!oRB;Qn<9bc9q' );
define( 'LOGGED_IN_SALT',   '=/ pVv0F^57lV,LMuXri*TkCBlnfvWaTh6|07;8cfHBaSMOO}e#g }EyIQ4Rhi84' );
define( 'NONCE_SALT',       '!I]t5gOIUzw3KzZ5MX3L;]4AyyZN=LQ]5SYdWT|>Af9#9:s=P=vXLGdIg*RR[`wt' );

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
