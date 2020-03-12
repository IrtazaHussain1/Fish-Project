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

 * @link https://codex.wordpress.org/Editing_wp-config.php

 *

 * @package WordPress

 */


// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', '' );


/** MySQL database username */

define( 'DB_USER', '' );


/** MySQL database password */

define( 'DB_PASSWORD', '' );


/** MySQL hostname */

define( 'DB_HOST', '' );


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

define( 'AUTH_KEY',         ' q<l]~t%AG7A28)=_k~I-ntl9~Q[}vjWT)=#Dkjfggu%4Cv)akuH%-]wr@D}IyGl' );

define( 'SECURE_AUTH_KEY',  'e9$! /BySutxzkJDprrX^7zABod#SYnvU:$jB!U-%e]iakAd/ 6bM,f4;q9I FGB' );

define( 'LOGGED_IN_KEY',    'JgA)^8x,b,h<~uHZ1JbW|I}7<OgvF.V-&M_={==}%|W0%J+7?O,jF_=hA3BulO``' );

define( 'NONCE_KEY',        'c`H*ZudiD<Y96>sP=!vba-hP+JXPje7!X|edz=^?H#6`gJYA$S< K[!!*s,0nC!0' );

define( 'AUTH_SALT',        'qH&N#g.*VBOE:0ZmwnE#$}_DgeFoCincCJ-Xbj>f6(Tc{I~ZvT;-M:|~{Re7[<=8' );

define( 'SECURE_AUTH_SALT', 'bdF1KyTt=Q}|!v%3xs5!ptX/g{LcFYX_t}} @<I#>aCPh9>^{*,fnh@Qg|e<!;o*' );

define( 'LOGGED_IN_SALT',   'Ol^^0[)(3!#B!bd1hQB`KbhGu~@h|C]rTxytvRNuZI^7v-5<uvBcxs1c#_/`D#{r' );

define( 'NONCE_SALT',       'nIn#wX_N*:qrgOaIM:hP58f3*nQ)&1$+8K#)<vTT6QNQc}Xx/8hZ2z{!I8lqQ#R!' );


/**#@-*/


/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'ec_';


/**

 * For developers: WordPress debugging mode.

 *

 * Change this to true to enable the display of notices during development.

 * It is strongly recommended that plugin and theme developers use WP_DEBUG

 * in their development environments.

 *

 * For information on other constants that can be used for debugging,

 * visit the Codex.

 *

 * @link https://codex.wordpress.org/Debugging_in_WordPress

 */

define( 'WP_DEBUG', false );


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

}


/** Sets up WordPress vars and included files. */

require_once( ABSPATH . 'wp-settings.php' );

