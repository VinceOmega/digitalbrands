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
define( 'DB_NAME', 'u221166178_dg' );

/** MySQL database username */
define( 'DB_USER', 'u221166178_dg' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bshGV4K38axvk8XuQYeqsSImxi2QZRkZmj5zT6DKQC2mX3ZM2FiB6uaa' );

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
define( 'AUTH_KEY',         '|mGK<sy>F3f%4cQJ.6G=..>y?oaF|FAb1jO|sE]@NOJ,q50cNCb3MA%t<%#RN#Gu' );
define( 'SECURE_AUTH_KEY',  'IiFe20Aiq_h7[c]VyHA#hDeWT&{J96U1R6e@:0QQ/v41e9$EYE1#:7Ru$$]AD;ID' );
define( 'LOGGED_IN_KEY',    'sFD|=nT.`84SKf3qbLbYFkp=:Q&np=N<IUKkl+mh!Bcb~x<r[U1G0a|,J*.0Czpz' );
define( 'NONCE_KEY',        'cX0TDNMDOZQ-$=ZD=a{KS)Ajn/OpruxPqU=iXG%;CeU$ZO9zc!O=$Fk~i<(%5r?<' );
define( 'AUTH_SALT',        'x] R5Or]pJ8d-q2*X?7AZRkQ2wG1A`d+Mja2W%jve/bnO4+-:whwP]QhXyqFe-@4' );
define( 'SECURE_AUTH_SALT', 'evW5bSGm[{:kAIHjx@H<W?vp8P}|osJS=`J^<G ?GP/q[O (l{,pzT_`7j%D+*$W' );
define( 'LOGGED_IN_SALT',   'Vjtw^V4kUA^CDohJSQ}raDX:CF2-[aKi4$.-H!(<K K)_b+a8YP<WaItP+*t.#ah' );
define( 'NONCE_SALT',       '0#f5u  *I;xwr3dGTLb7(d@on^5/WPY!{MBg+B4{:<*CBcRTl2%~2UB^xJq=sd9.' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'marketing_';

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
