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
define( 'DB_NAME', 'codingArena' );

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
define( 'AUTH_KEY',         '@ZABbnQB*cwTc/~7<jV(1![s^u1>C<d|)W3]b.vMbZf!D:=i4wY&Y}+GDoU[vH,I' );
define( 'SECURE_AUTH_KEY',  '<thc`vMwa;2[_RXi;!Dod.({EV!de](HWBgBP3:&PLlRIQ3_]y6zIfgI[HZtOq=+' );
define( 'LOGGED_IN_KEY',    'aNf=iQ*m7S/A3L:AdKJ;L@.^^7#X!4yhy.8qm}Z_~Y K;5 C{@ksRMWa:CPANB~1' );
define( 'NONCE_KEY',        'MJ.~2-Pj=[-(jg{N[q33gWGt~9jz-rZOEov`Kt9_$FlM6lUlG^aL:gR!ee1uq<G1' );
define( 'AUTH_SALT',        'Lyc=j>|rGiNzO^:/vl&H}dpSnA);OoI89a1FeI=W)O@a)n!kOBwm3C:CgF=U 2w8' );
define( 'SECURE_AUTH_SALT', 'k0N|~5X>W7n[/C[lo ]gJ>[CU9I32eq,!=;%_Vqe&?L.hFz-%q$q%o0!NN&MU>89' );
define( 'LOGGED_IN_SALT',   'tvqi^e:`(EfM+gq$kUMV&e&3NAfibZ]Q`ST<j{}3zR)QyZHw#bld^N<!^U)U8?,s' );
define( 'NONCE_SALT',       'gw<SU-Cfmv~t}@?4Qu<Qz(rBX:O~fJfX .~>`Tr^4PC}f$okwvtO{;TMw4wKe{(W' );

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
