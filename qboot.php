<?php

error_reporting(E_ALL | E_STRICT);
ini_set('error_reporting', E_ALL | E_STRICT);
ini_set('display_errors', 1);
ini_set('log_errors', 1);

function error_handler($level, $message, $file, $line, $context) {
    echo $message . "\n caught by error_handler\n\n";
    //die();
}

set_error_handler('error_handler', E_ALL | E_STRICT);

//function exception_handler($exception) {
//    echo 'aaaaexception_';
//    //echo 'Uncaught exception: ' . $exception . "\n";
//}
//set_exception_handler('exception_handler');
//register_shutdown_function('Program::Main');

$dir = '.';
$c = 0;
while (realpath($dir . '/framework') == false && $c < 20) {
    $c++;
    $dir.='/..';
}

$ver = '/1_6';
$u6 = '/framework' . $ver;
include_once $dir . $u6 . '/bootstrap.php';
?>