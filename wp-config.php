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
define( 'DB_NAME', 'portafolio-WP' );

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
define( 'AUTH_KEY',         'X<S@hcr}tiJ}YedO%.#TJrTP|,/)/,H{p(0Q7p#)gr,<7pX(A9M;wt7|i$*=7we$' );
define( 'SECURE_AUTH_KEY',  ';4CAjQ(LUpbV6ib../`GY]?.=6Ggi]9>-rROyed+kp5*UW>&9bp1awTNg}hAzJ0T' );
define( 'LOGGED_IN_KEY',    '!:xLwZ?K?:p8@R$DqH:GS* ;{X98_u.<nTudw|=_3rU~L40/#t|%QiYLMTS:WJx4' );
define( 'NONCE_KEY',        'pLG)wUp9S`0V2,3c#s!::y~_q]Cf*_Y=VpTXg++YD[.8zt:qN(AouNcbk+:{gA:X' );
define( 'AUTH_SALT',        '7N)z%?bhRkD!0q}r%:JZP3Ou~*5.<_Hat&cr_tT`oAO[jwoPVYsK[Hw8ZY8VDfZh' );
define( 'SECURE_AUTH_SALT', '{F=9a*hNGA`S/,Z3jmHG4^^sTs`S2%9XWL8]/y`^&q9A=YzXpQi2KoirnQc1)C@H' );
define( 'LOGGED_IN_SALT',   'RZ3d1QbA5I!DLiS/In<tBs98uVi-Za*.v-`Ez4G^ >7$F:xmnLPW6]=XNjk)t{/o' );
define( 'NONCE_SALT',       'mXGQ`m|7!vR+9#^T7U&gmW_lD;3f% 7P[%~H=bzz&Ye`*4j04zm]+<6k6,@uo:M;' );

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
