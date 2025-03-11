<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\OSPanel\domains\chpok\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'chpok' );

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
define( 'AUTH_KEY',         'Z< aFh!|INWet#;.<TsX0`0rOP4 CbG_.w ZSekh=Rh`)lnhQV1gfC][/4OI]!f2' );
define( 'SECURE_AUTH_KEY',  '.c23R=H<q-Zres?!JamkH+?j{|i_}`8MdI/dX~crM/P{7gb:Ph8y6KvKkx^I@r!?' );
define( 'LOGGED_IN_KEY',    '3A-QUX.naF 3= Em~;Gv@e9v+%s.%ugYfujM@r9Us,&[Z~rNp.Xx!.gtH#PIg006' );
define( 'NONCE_KEY',        '6D}y!AB<%ImaV+i((ht)w 1vZ`;BiMPScHMOy{u2ei4BBmGETZEa>r%HvMLp>QNa' );
define( 'AUTH_SALT',        'f<;WnwWq{+,EDxTX6t8Xj8yxnexFNS8*3[nskEem-/sCI<=7a@!bvc.U;4_1lH`U' );
define( 'SECURE_AUTH_SALT', '|?i.9Zt#PHB=zRfTMl0`)pzXq1qSV/r*<dH,grZK1 e7~j9.Uh5BUC!C$Byd[k0l' );
define( 'LOGGED_IN_SALT',   '^Ai!|77eSnZtMUoDr<TG_.!w1V*4Y8@9kmL}{.AL 3.^Coi6R1r;rI6oVcsDhgc}' );
define( 'NONCE_SALT',       'od6g3N)>B_n2UFS}c%e+E#j^a)_ryL:/CMG9%FVw!QDto#R<2 f`ot>#y1VfH(q)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
