<?php
/*
|---------------------------------------------------------------------
| Dynamically set environment
|---------------------------------------------------------------------
*/
if($_SERVER['HTTP_HOST'] == 'completemarine.dev' || $_SERVER['LOCAL_NAME'] == 'completemarine.dev') {
    // Local Development
    $db_hostname = 'localhost';
    $db_username = 'root';
    $db_password = 'Csm232s99';
    $db_name = 'wordpress_completemarine';

} elseif($_SERVER['HTTP_HOST'] == 'completemarine.nuwavedev.com') {
    // QA Staging
    $db_hostname = 'localhost';
    $db_username = 'nuwaved_dba';
    $db_password = 'C$m232s99?!';
    $db_name = 'nuwaved_completemarine';

} else {
    // Production Environment
    $db_hostname = '';
    $db_username = '';
    $db_password = '';
    $db_name = '';

    // Prevent Control Panel Users from Editing Theme/Plugin Files in Production Environment
    // http://codex.wordpress.org/Editing_wp-config.php
    define('DISALLOW_FILE_EDIT', true);
    define('DISALLOW_FILE_MODS', true);
}

/*
|---------------------------------------------------------------------
| Configure DB
|---------------------------------------------------------------------
*/
define('DB_NAME', $db_name);
define('DB_USER', $db_username);
define('DB_PASSWORD', $db_password);
define('DB_HOST', $db_hostname);
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

/*
|---------------------------------------------------------------------
| Wordpress Application Options + Settings
| http://codex.wordpress.org/Editing_wp-config.php
|---------------------------------------------------------------------
*/
$table_prefix  = 'wp_';

// http://codex.wordpress.org/Editing_wp-config.php#Security_Keys
// Online Generator: https://api.wordpress.org/secret-key/1.1/salt/
define('AUTH_KEY',         'eG>]I.@N3cUQoA_|ES<$;-Th<`}F`-ux,]h95!^#jvP[+QAHrRkpK:nPvp-WZ=%o');
define('SECURE_AUTH_KEY',  '?[z=ndU?>^MW -|yi-&>Ob(Xz!g`g?,i?+mp2(<9>*w|7C;`Tm<dp&OSJcY:Dj4p');
define('LOGGED_IN_KEY',    'j$Q3f!$F0=aL3.NW6]A%n1u-+0m:zCo3_nC(Sj<C/h;nB/&Q:LUV[B_{C:-T:v@J');
define('NONCE_KEY',        'EC4rW|A5nXIV7/->of?tQ#J+`(bzT0vkoKSE$TL;#8}%*tj Ud$TrWh<4 }C-A-X');
define('AUTH_SALT',        ';eua8-c?m~7z0MD59H?,Ea@7Zw?,i,pKf](W7Mfk-a!ukfX2*P%yBQ[>/Fm#B<vI');
define('SECURE_AUTH_SALT', 'd.]M^H_raif:lF7eB+{L9[gNXr-3sP}/sWl+$8V=L_-J.%2;k-5u~(.]<},U.Zva');
define('LOGGED_IN_SALT',   '|Z2;;EB|FrLF#ct*n|/ha#n(Ag}xxgH}%|%}si|?}{]S&?5mSlIXdqprOe:78Xuu');
define('NONCE_SALT',       './mWi^L?-*@0DM8@[tDxFsjW|b~,H>VqpNhf4&W-:+;f1vV6e(MNd,A~LZ56$V3R');

define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', false);

define('WP_HOME',    'http://' . $_SERVER['HTTP_HOST'] . '');
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '');

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', false);
define('SAVEQUERIES', false);

define('ABSPATH', dirname(__FILE__).'/');
require_once(ABSPATH.'wp-settings.php');