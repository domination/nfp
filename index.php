<?php

include_once 'qboot.php';
include_once 'app/app.php';

final class Program {

    public static function Main(array $args = null) {
        $Application = new app_App();
        $Application->Run();
    }

}

?>