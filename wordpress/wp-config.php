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
define( 'DB_NAME', 'db1' );

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
define( 'AUTH_KEY',         'kV-M;/b8LPiz}/hS{aET+U@&=YbvyPk6:A~@&MW^)G~<Jk,4V9KG)ZNW,WQT*YjC' );
define( 'SECURE_AUTH_KEY',  'rddOhvd#7xt*m+,R;jWA!R:y,7S9gA*$G4G+*iq%v:~IIK5.e#$.1<:>M~W! 0x7' );
define( 'LOGGED_IN_KEY',    'p;!mCvY{,}rsgU*_xcW*X*<J~PC83L;] GY)p=m>Cam?mS+=/_N%iOH0^zH|9tBh' );
define( 'NONCE_KEY',        ':d{JZ0@<7HTNbkQlk>?J&hGo](dXw}_aBlM>zX &IRP`ZbehU]J3X*GJdO!MKw# ' );
define( 'AUTH_SALT',        '1r0*L=vI~|?{:2<&(vq_wo2/>;y3F(B()A[_Q>?|d#M.$d6,U|Hix}4Y?!;]tJ6v' );
define( 'SECURE_AUTH_SALT', 'qv@fNdP/IE2TujP85hD@(3Z :~NB59aD_e1./#yG>j[XW.~x$S/L$t&yqR7k|,c@' );
define( 'LOGGED_IN_SALT',   'z;[e,$PL6h4Tudh1Gy2n-(74X+;XXCAd>X`{](J8]V~_vhbD*wi]>O<g#:=Z?f{-' );
define( 'NONCE_SALT',       'A#bmz}q E{.[c<IU/dozX>NLw#A-R$!9XJ-U/OT(b^{q4TW39XFy_1W6d#:E lIj' );

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
