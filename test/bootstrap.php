<?php

ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . dirname(__FILE__) . '/../${php.global.include.path}');

function static_cast($to_class, $obj) {
    if (class_exists($to_class) && is_object($obj)) {
        $obj_in = serialize($obj);
        $obj_out = 'O:' . strlen($to_class) . ':"' . $to_class . '":' . substr($obj_in, strpos($obj_in, ':', 7) + 1);
        return unserialize($obj_out);
    }
    else
        return false;
}

require_once dirname(__FILE__) . '/../framework/1_6/System/Object.php';
require_once dirname(__FILE__) . '/../framework/1_6/System/ValueType.php';
require_once dirname(__FILE__) . '/../framework/1_6/System/IComparable.php';
require_once dirname(__FILE__) . '/../framework/1_6/System/IEquatable.php';
require_once dirname(__FILE__) . '/../framework/1_6/System/Boolean.php';
?>