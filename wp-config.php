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
define( 'DB_NAME', 'wordpress_4' );

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
define( 'AUTH_KEY',         '(_fI]uDK$GZH)~e|Si*eI*<2YQ@gAaxK}:G:,u:GW4Y*v1@|>[=HON0jT`5cKxKe' );
define( 'SECURE_AUTH_KEY',  '66s;[~.T0XwJm*]xA. FwPT;GUTmg=q;-uRn<`J|XyIr|+4yOs}qAH(Eg=_%Jj@Y' );
define( 'LOGGED_IN_KEY',    'R0R#-zOMjD.OG{BqoMn;Yu23bleo0mhfw>C(4~fPeZaaP!sYqd:U1nO_{)iu^9hN' );
define( 'NONCE_KEY',        'ct)>M=6f;^C_RMXnfr8F#9g<no8u}t||(Z/R0R$Q6cfKo=AF#Kstum<Mo]2cnwOG' );
define( 'AUTH_SALT',        'Th2g2(`&/WLReIK<sMjn$&1ErFiwk{@,H?(J+I6]J>1$i0VPq:M>ZV.I2=B]ZZ]z' );
define( 'SECURE_AUTH_SALT', 's^.5PRG=WIvqDM!Nb}vZkJsd9~_ivus}OZ~F7Y%6P1},osk^=U~X(f}h!-|ICY!R' );
define( 'LOGGED_IN_SALT',   'Pt*uB`CA%aZ:_w|3:Af+OYBf)VGOY`o8`NAJh4eIss;hCV(|FztKuT^@M1`!qu93' );
define( 'NONCE_SALT',       'Oy)|(V}8$%i0@!c{K2_q.~OV~~HCbT<zP#@;PXml%|Dfi;4+5OCuM$SPma8=31=f' );

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
