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
define( 'DB_NAME', 'dbh0ffkkaivggh' );

/** MySQL database username */
define( 'DB_USER', 'ux4whppv7hseg' );

/** MySQL database password */
define( 'DB_PASSWORD', 'znecl3opnt0g' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'WdE]$ghjvwQ+ )6SVqvX-2?ZM9 lJMmgu3P#QWp^Z%v kyw&(@? _`6GQ,D`GM.M' );
define( 'SECURE_AUTH_KEY',   'adv:UH=AoVN@hd}cXK-e)nV?ksv$ZPg]$<<E%SU/A2VVr(,7#3D,Aiim3yT7V&{X' );
define( 'LOGGED_IN_KEY',     '<hX9~uh9{{4~[L[Y.:WGz0<}1#?, Xi!J)9UIRQ7reaG6<th{?w<WZ{$`yzsZVOc' );
define( 'NONCE_KEY',         'qUl:( LkB6&q!&*.,2w|O5)HuSyqp.`uy7,zCGo3`]Qw B2x)9]S(QV[e;Sb;3&P' );
define( 'AUTH_SALT',         'qESe_~!v%xoBf^sBg!}UnOE|wW9/WJaptgG]uSSNO#u}paUJ$sz8[Oe:SKFsM%(7' );
define( 'SECURE_AUTH_SALT',  '=R>5M][3S)8QQ0rmW`5LJ0hZ@uXhrA|Y?r&d94x{L|`fif;~;0B^Ro*:K~-O2#_x' );
define( 'LOGGED_IN_SALT',    '#b4nl^wHTN/x7S3}r7SJ%)mJoo)P3mL@ODEN!_8pQ*dMgLw,(1QVXwl$d=+TE)sm' );
define( 'NONCE_SALT',        'r-E,pw9[3D $Ql1A&FVe+F-=)9D[_@#<(hu=_zRaKvAr|>S,haU8nX8+[m2NqUA~' );
define( 'WP_CACHE_KEY_SALT', 'sMAw6xEQjxcft1!;fBYBpoSm`Dpgi85}N8$&ajK~sKI[~b:}?70![V)v&D,t[a4_' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nfb_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
