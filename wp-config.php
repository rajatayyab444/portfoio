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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '~yxE>6CK2N()VpFQ%hr}[1)yJc(O68MsI(Z.[c,5~A<7i+I-C,d&kbZ4=eOT=BE?' );
define( 'SECURE_AUTH_KEY',  'zkt^2V_}Hur=;G+i`,ZR>C^kC8~1A=BgXrXu-iMI)(bqNO#MW#eA:8^9@sWz)s;T' );
define( 'LOGGED_IN_KEY',    'wQ&m/z5H&QH{jTr+^[SOUolN(qK{Xa4]eHMfM%{|OFw:HK>k_eH<U8J%F`QT|l)O' );
define( 'NONCE_KEY',        '0YXiT w-gr66(I4g+*.H;[hywHc,Ub:p[mGJet#Auh+p1#rwLK}DdQG&y+!,q!?4' );
define( 'AUTH_SALT',        'ULhCDb;_I(B6A}SrZ-CF94eQYbAV9`=fCj$<yKd~)^v;{&cP+ u_F-ZS<m#YI(  ' );
define( 'SECURE_AUTH_SALT', '$,+d[hK48y5,d/OOM.nKa6P?2-qLsj%?FVIf#[H5Qp:cR}y!J/mwJ**ztJ&Fl-S~' );
define( 'LOGGED_IN_SALT',   'eO)jnxzfckF{8VJ1j`mCmRs77FVqwe<NX2;2`r3W_=zDTp7Tg!{#Lq,&Q7LCt*hp' );
define( 'NONCE_SALT',       'XkDldv-AF cxA<9 ?>;uhR}=t=v`&eeukla][mJ7>5!,?:J.3%1O%GgoBBYZZ!-V' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
