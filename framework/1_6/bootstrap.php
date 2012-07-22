<?php

//clean setup
unset($dir, $c, $ver, $u6);

//clear deprecated variables
unset($GLOBALS, $HTTP_ENV_VARS, $HTTP_SERVER_VARS);
unset($HTTP_POST_VARS, $HTTP_GET_VARS, $HTTP_COOKIE_VARS, $HTTP_POST_FILES);

//remove not necessary array
$_SERVER = array_merge($_ENV, $_SERVER);
unset($_REQUEST, $_ENV);

//define absolute path to root of u6
//define('ULTRA6_PATH_ROOT', substr(dirname(__FILE__), 0, -5));
define('ULTRA6_PATH_ROOT', dirname(__FILE__));

//load System class
//include ULTRA6_PATH_ROOT . '/System/Object.php';
include ULTRA6_PATH_ROOT . '/System/System.php';

function __autoload($name) {
    $en = explode('_', $name);
    include ULTRA6_PATH_ROOT . '/System/' . $en[1] . '.php';
    $fname = '__init_static';
    if (method_exists($name, $fname)) {
        call_user_func(array($name, $fname));
    }

    //echo "Loaded $name.\n";
}

function using($namespace) {
    
}

$System = new System();
?>