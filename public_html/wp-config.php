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
define( 'DB_NAME', 'id10198626_wp_597b69e8d6a017d11cf449214035bcbc' );

/** MySQL database username */
define( 'DB_USER', 'id10198626_wp_597b69e8d6a017d11cf449214035bcbc' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cf6479a2197f2532a283a18d0f7531f344d711da' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'G2aDZ^>I/mT7zYoD8py; [!D>D/;uY,L*/B=gBW;*bWx>Hwqi!uM$o,%J,4k6p48' );
define( 'SECURE_AUTH_KEY',   '|[)A`NL|/ZshT fs]GsL1NB%-}wNGo a3PF-9(75XdW8!kU|fX+Z2-%x+zJci4z4' );
define( 'LOGGED_IN_KEY',     'NkNwu)3AgW58)(KuG{R+S0^C4z*vUnH~p-~twZd>G wa&YlZsj-;@r$Qy^mw~Pk0' );
define( 'NONCE_KEY',         'vy-FB^4Opvj)K(EjK=W86gJ4qOQ-SdKR+nJ6N<Dl7budC/V{0m<#WU@hIbj=~,)+' );
define( 'AUTH_SALT',         'I_xmvdv@V{4L*-AhE(2Yuzj5?PPXI1o-)RO=SKw!-xS{gO:FAnPXnBNMlhDZ:mX-' );
define( 'SECURE_AUTH_SALT',  'P3z,z@K^DS{HbdBI^,`C(yyc=KyF Qz>FUsj8y^Ndbs%$+QQgh,5yQ}FS T<c]<s' );
define( 'LOGGED_IN_SALT',    'evgds;W~_^}}[qYY(>ddJA7Sue/I}W.&J#ur  *B!vY[wVW%eS-/1Za#+cM)}@sx' );
define( 'NONCE_SALT',        'BCZMvYyTH]CUOpW8vKPE(W42 !(2to($q5jBC.7jcVP|8G^J{F]zU#ehoyki{yei' );
define( 'WP_CACHE_KEY_SALT', 'eME%^B&]F>sLm{-p>43}f QW=AI=.=DGxkbY {!!QX([kB.9Wnd,fLxj8.g.#T+c' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
