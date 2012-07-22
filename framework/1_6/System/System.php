<?php

final class System extends System_Object {

    public function Finalize() {
        try {
            Program::Main();
        } catch (Exception $ex) {
            echo $ex;
        }
    }

    public static function cstor($obj, $arguments) {
        $c = count($arguments);

        $name = get_class($obj);

        //echo $name."\n";
        $oRefl = new ReflectionClass($name);
        if (is_object($oRefl)) {
            $array = $oRefl->getMethods();
        }

        $_ENV['System_Object__call'] = $c;

        if (!function_exists('System_Object_cstor__call_array_filter')) {

            function System_Object_cstor__call_array_filter($elem) {
                return strstr($elem->name, '___cstor' . $_ENV['System_Object__call']) !== false;
            }

        }

        $filtered_array = array_filter($array, 'System_Object_cstor__call_array_filter');

        unset($_ENV['System_Object__call']);

        //print_r($filtered_array);
        // sorting keys - not needed
        $pp = array();
        foreach ($filtered_array as $l) {
            $pp[] = $l;
        }
        $filtered_array = $pp;

        reset($filtered_array);
        $func = current($filtered_array);

        if (is_object($func)) {

            $fname = $func->name;

            if (method_exists($obj, $fname)) {
                //call_user_func_array(array($this, $fname), $arguments);
                if ($c == 0) {
                    return $obj->$fname();
                } elseif ($c == 1) {
                    return $obj->$fname($arguments[0]);
                } elseif ($c == 2) {
                    return $obj->$fname($arguments[0], $arguments[1]);
                } elseif ($c == 3) {
                    return $obj->$fname($arguments[0], $arguments[1], $arguments[2]);
                } elseif ($c == 4) {
                    return $obj->$fname($arguments[0], $arguments[1], $arguments[2], $arguments[3]);
                } elseif ($c == 5) {
                    return $obj->$fname($arguments[0], $arguments[1], $arguments[2], $arguments[3], $arguments[4]);
                } else {
                    throw new ErrorException('System_Object __get count params');
                }
            } else {
                throw new ErrorException('System_Object __get');
            }
            throw new ErrorException('System_Object __call');
        }
    }

    public static function get($obj, $name) {
        $fname = 'get' . $name;
        if (method_exists($obj, $fname)) {
            return $obj->$fname();
        } else {
            throw new ErrorException('System_Object __get');
        }
    }

    public static function set($obj, $name, $value) {
        $fname = 'set' . $name;
        if (method_exists($obj, $fname)) {
            $obj->$fname($value);
        } else {
            throw new ErrorException('System_Object __set');
        }
    }

    public static function call($obj, $name, $arguments) {
        $array = get_class_methods(get_class($obj));

        $_ENV['System_Object__call'] = $name;

        if (!function_exists('System_Object__call_array_filter')) {

            function System_Object__call_array_filter($elem) {
                return strstr($elem, $_ENV['System_Object__call'] . '___') !== false;
            }

        }

        $filtered_array = array_filter($array, 'System_Object__call_array_filter');

        unset($_ENV['System_Object__call']);

        // sorting keys - not needed
        $pp = array();
        foreach ($filtered_array as $l) {
            $pp[] = $l;
        }
        $filtered_array = $pp;

        if (count($arguments) > 0) {

            $arg = $arguments[0];
            foreach ($filtered_array as $l) {
                $s = explode('___', $l);

                if ($arg instanceof $s[1]) {
                    return $obj->$l($arg);
                    break;
                } else {
                    if ($s[1] == 'integer') {
                        if (is_integer($arg)) {
                            return $obj->$l($arg);
                            break;
                        }
                    } elseif ($s[1] == 'string') {
                        if (is_string($arg)) {
                            return $obj->$l($arg);
                            break;
                        }
                    } elseif ($s[1] == 'System_Boolean') {
                        if (is_bool($arg)) {
                            $obj2 = new System_Boolean();
                            $obj2->Value = $arg;
                            $f = $name . '___System_Boolean';
                            return $obj->$f($obj2);
                            break;
                        }
                    } elseif ($s[1] == 'T') {
                        if (is_a($arg, get_class($obj))) {
                            return $obj->$l($arg);
                            break;
                        }
                    }
                }
            }

            $fname = $name . '___Unknown';
            if (method_exists($obj, $fname)) {
                return $obj->$fname($arguments);
            }
        }

        throw new ErrorException('System_Object __call');
    }

}

?>