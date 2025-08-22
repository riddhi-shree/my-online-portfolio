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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'rvY<Y;6%?@9%/L@u&&Pd-6J*+g,~9G!4eK9L(X<-9u1?&.~Pv{KunBW 5V`?H*!5' );
define( 'SECURE_AUTH_KEY',   'nqCB,&[?@aNb%F1hXM&[ /pO9#ubj/Cx7?5HpViTu!z9fT&E)$EOVPB r/J@/AMn' );
define( 'LOGGED_IN_KEY',     'N0K}R+_};uGlIPBy;?n~;[:`Ca~wvh9?0=Y-~2wkK$[F7Ag>u/D fk<3tq{pLj,)' );
define( 'NONCE_KEY',         'Sj.cbI+[/#6<*o7a<QTP0;1JN(0eM}T)hzi=mdF<4,nKW62{N7]AYFJ,<`Qap9~d' );
define( 'AUTH_SALT',         'N;#FB-!f}2(e;E)wd6[FG`9Y :}W=xE^T@#Z%pTLm~GP%_TXA~{@,=r;RRn+8${J' );
define( 'SECURE_AUTH_SALT',  'ZqfVpqwgjzx}!1-(5DSc{_d&KwNp%@2MPQck}B8VLHMfwz>HHh`9_a)_jV%WgF%o' );
define( 'LOGGED_IN_SALT',    'C@9[m6}Aae;dQz86h@JBMp,w1ybh:l~blY6^j|Y;-ma+$qPOGK60jWNE~5{dc6+C' );
define( 'NONCE_SALT',        '7gZS45!%E,g}2OYZU~L,aG*m*IH2IV2#DT;,K9KuZEv4>Ig7.MR{yC=4D6eFPK-=' );
define( 'WP_CACHE_KEY_SALT', '@++U,bwn=JMoxxZ[7r%yH-s{Y(@^?ua0?ZE/8aQe GW-sd`rEB<!JL7xt.~zBT#O' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
