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
define( 'DB_NAME', 'wordpresshost' );

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
define( 'AUTH_KEY',         '>^%J;iyIz($9KQzAASFFHhThj `l_J/ 0gf31oN6gV{xw@|Ztd+ nBBhy-[s a/M' );
define( 'SECURE_AUTH_KEY',  'b7x<,X1uoADm*A| +j $<W6{q#ba2H|Ngg}yzlTjAI3RtT!O6}:96qO-8)uh`%[X' );
define( 'LOGGED_IN_KEY',    'y(q1wZ$jnUoy#I~ `~Q_=tX_s]5?8E]MH{o4;HHhqx<gEdfV|Yg5K^JW>4cP{K}S' );
define( 'NONCE_KEY',        'KwzV,-+2RV =[<dDr~mJuS~s*9diD!Jp@8tj&&(dj6L0m+Wx5n,Xv0M8%iUaV:bH' );
define( 'AUTH_SALT',        ';?f;W|$~bu!xH70M_A/@}bOS_?PWec%xSZm7f>iQ#:Sa@w#JU6#x`%btY.9e]l)[' );
define( 'SECURE_AUTH_SALT', '/#`CnjS;aPC|/HM{pYWmGY42]/O{.C02`*0g-PusU5O/[5)1w1:B*/sHWlqZYusD' );
define( 'LOGGED_IN_SALT',   ')W3UktXw.oclljzgL=L&GE6:ZHmNWe~XwA`i9R%@uF`;l~>ECMj%pDu4O~j)_i53' );
define( 'NONCE_SALT',       'BdfEza>;yi?U!!Mc86*x%P30WFz_{7/TOjnd@7W?npJ[bNJHg#[79$yFGPr!n [J' );

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
