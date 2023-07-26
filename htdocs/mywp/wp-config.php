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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mywp' );

/** Database username */
define( 'DB_USER', 'mywp' );

/** Database password */
define( 'DB_PASSWORD', 'K!x50rd[(7PnSRnE' );

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
define( 'AUTH_KEY',         'av(yQLx/N[qe:]OEojU@s6CAqqD|0`t+[1xteU9=Z?Az8eMK<}$^*FH@J_q)!rkr' );
define( 'SECURE_AUTH_KEY',  'A1%3*GXtt*0U*1?]6. %J [ 0t~H0?biN(Yj=I=KT4tQYH/@MdF)-6apxyeUw)R7' );
define( 'LOGGED_IN_KEY',    'hTo,M,w)6s$L7%$UWU.=ML{oc~EJd&;q#KzT]`: RX5n;=3a9]AQ^QrAuID[CTn3' );
define( 'NONCE_KEY',        '`Zd4qt0m[`59F29utbLkfhp.Ve|9#@@2VdT&zf{Z}FVy{s#e ;KCoHm9NH+c#~B9' );
define( 'AUTH_SALT',        'K#h)2*`Mb57|~M97xX<pVB;HvaE|WEdUZG}R]pl>*jwP$8mx%J9!?dJ?jY-N5f|[' );
define( 'SECURE_AUTH_SALT', ']4SOeP1?,&uc.n0o}yQ}lX 4wAq$<fSwO`DqI!W<ElhyK0@hU{#%>)qjXH05uC`3' );
define( 'LOGGED_IN_SALT',   'Xj%a+dwbc,@zrD/j4U)tx8Xi*)a:H1eR>.H#pvDV( H?,W[AkT],i$;(^gVq~Y}9' );
define( 'NONCE_SALT',       'V)m%a?u]GGh>Z$[yS6X0w2eDqV6.FZUgC(KnNW:T+8iAhv^}@h`d)hb]dybJBM|U' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
