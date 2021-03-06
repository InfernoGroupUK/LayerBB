<?php
//===================================//
// LayerBB Project                   //
//-----------------------------------//
// Website: https://www.layerbb.com  //
// Email: info@layerbb.com           //
// Build Series: 1.1                 //
//===================================//

if (!defined('BASEPATH')) {
    die();
}

/*
 * LayerBB Configuration File.
 */
define('MYSQL_HOST', '%mysql_host%');
define('MYSQL_USERNAME', '%mysql_username%');
define('MYSQL_PASSWORD', '%mysql_password%');
define('MYSQL_DATABASE', '%mysql_database%');
define('MYSQL_PREFIX', '%mysql_prefix%');
define('MYSQL_PORT', 3306);

/*
 * Local Details
 */
define('SITE_URL', '%site_url%');//Without the ending "/"
define('SITE_PATH', '%site_path%'); // Without the ending "/"
define('LayerBB_VERSION', '1.1.3');
define('LAYER_SESSION_TIMEOUT', 31536000);//In seconds.
define('USER_PASSWORD_HASH_COST', 10);

/*
 * Usergroup Details.
 * DO NOT CHANGE IF YOU DON'T KNOW WHAT THIS WILL DO.
 */
define('ADMIN_ID', '4');
define('MOD_ID', '3');
define('BAN_ID', '2');

/*
 * Forum Configuration.
 */
define('THREAD_RESULTS_PER_PAGE', 12);
define('POST_RESULTS_PER_PAGE', 9);

?>
