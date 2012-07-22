<?php
//to delete
final class System_Console extends System_Object {

    public static function Write($value) {
        //echo 'static-write ';
        $p = new System_Console();
        $p->_Write($value);
    }

    protected function _Write___System_Boolean(System_Boolean $value) {
        $args = func_get_args();
        if (count($args) == 1) {
            echo $value->Value ? 1 : 0;
        } else {
            echo call_user_func_array('System_String::Format', $args);
        }
    }

    protected function _Write___System_Object(System_Object $value) {
        $args = func_get_args();
        if (count($args) == 1) {
            echo $value;
        } else {
            echo call_user_func_array('System_String::Format', $args);
        }
    }

    protected function _Write___string($value) {
        $args = func_get_args();
        if (count($args) == 1) {
            echo $value;
        } else {
            echo call_user_func_array('System_String::Format', $args);
        }
    }

    protected function _Write___integer($value) {
        $args = func_get_args();
        if (count($args) == 1) {
            echo $value;
        } else {
            echo call_user_func_array('System_String::Format', $args);
        }
    }

    public static function WriteLine($value = '') {
        $args = func_get_args();
        if (count($args) == 0)
            $args = array($value);
        call_user_func_array('System_Console::Write', $args);
        echo "\n";
    }

}

?>
<?php

//http://msdn.microsoft.com/en-us/library/system.tuple.aspx

class Tuple extends Object implements IStructuralEquatable, IStructuralComparable {

    public static function Create($t1, $t2 = null, $t3 = null, $t4 = null, $t5 = null, $t6 = null, $t7 = null, $t8 = null) {
        $args = func_get_args();
        return new Tuple(count($args), $args);
    }

    private $values;
    private $count;

    public function __construct($count, $values) {
        $this->count = $count;
        $this->values = $values;
    }

    public function __get($name) {
        if (substr($name, 0, 4) == 'Item') {
            $tmp = explode('Item', $name);
            $num = $tmp[1];
            if ($num <= $this->count)
                return $this->values[$num - 1];
        }
        return null;
    }

    public function CompareTo($obj, IComparer $comparer = null) {
        
    }

    public function Equals($other, IEqualityComparer $comparer) {
        
    }

    public function GetHashCode(IEqualityComparer $comparer) {
        
    }

}

?><?php

//http://msdn.microsoft.com/en-us/library/system.timespan.aspx

class TimeSpan extends Object {

    public $Hours;
    public $Minutes;
    public $Seconds;
    public $Milliseconds;
    public $Ticks;
    public $TotalDays;
    public $TotalHours;
    public $TotalMilliseconds;
    public $TotalMinutes;
    public $TotalSeconds;

    const TicksPerMillisecond = 10000;
    const TicksPerSecond = 10000000;
    const TicksPerMinute = 600000000;
    const TicksPerHour = 36000000000;
    const TicksPerDay = 864000000000;

    public function __construct($ticks) {
        $this->Ticks = $ticks;

        $this->TotalMilliseconds = $this->Ticks / TimeSpan::TicksPerMillisecond;
        $this->TotalSeconds = $this->Ticks / TimeSpan::TicksPerSecond;
        $this->TotalMinutes = $this->Ticks / TimeSpan::TicksPerMinute;
        $this->TotalHours = $this->Ticks / TimeSpan::TicksPerHour;
        $this->TotalDays = $this->Ticks / TimeSpan::TicksPerDay;
        $this->Days = (int) $this->TotalDays;
        $this->Hours = (int) ($this->TotalHours - (int) ($this->TotalDays) * 24);
        $this->Minutes = (int) ($this->TotalMinutes - (int) ($this->TotalHours) * 60);
        $this->Seconds = (int) ($this->TotalSeconds - (int) ($this->TotalMinutes) * 60);
        $this->Milliseconds = (int) ($this->TotalMilliseconds - (int) ($this->TotalSeconds) * 1000);
    }

    public function ToString() {
        return sprintf('%s%02d:%02d:%02d.%07d', ($this->Days > 0 ? $this->Days . '.' : ''), $this->Hours, $this->Minutes, $this->Seconds, round(($this->TotalSeconds - (int) $this->TotalSeconds) * TimeSpan::TicksPerSecond));
    }

    public function Equals($obj) {
        if ($obj != null && $this->Ticks == $obj->Ticks)
            return true;
        return false;
    }

}

?><?php

//http://msdn.microsoft.com/en-us/library/system.string.aspx

class String extends Object {
    const _Empty = '';

    public static function Format($format, $arg0, $arg1 = '', $arg2 = '') {
        $args = func_get_args();
        $str = mb_ereg_replace('{([0-9]+)}', '%\'.(\\1 + 1).\'$s', array_shift($args));
        eval('$str = \'' . $str . '\';');
        return vsprintf($str, array_values($args));
    }

    public static function IsNullOrEmpty($value) {
        return $value == null || $value == String::_Empty;
    }

}

?><?php

//http://msdn.microsoft.com/en-us/library/system.diagnostics.stopwatch.aspx

class Stopwatch extends Object {

    /**
     *
     * @var TimeSpan timespan
     */
    public $Elapsed; //TimeSpan 
    public $ElapsedMilliseconds; //long
    public $ElapsedTicks; //long
    public $IsRunning; //bool
    private $_microtime;
    public static $Frequency = 10000000;

    public function __construct() {
        $this->IsRunning = false;
    }

    public static function StartNew() {
        $sw = new Stopwatch();
        $sw->Start();
        return $sw;
    }

    public function Reset() {
        $this->IsRunning = false;
        $this->_Update(0);
    }

    public function Restart() {
        $this->_Update(0);
        $this->_microtime = microtime(true);
    }

    public function Start() {
        $this->_microtime = microtime(true);
        $this->IsRunning = true;
    }

    public function Stop() {
        if ($this->IsRunning) {
            $mt = microtime(true) - $this->_microtime;
            $this->IsRunning = false;
            $this->_Update($mt);
        }
    }

    private function _Update($mt) {
        $this->ElapsedMilliseconds = (int) ($mt * 1000);
        $this->ElapsedTicks = (int) ($mt * Stopwatch::$Frequency);
        $this->Elapsed = new TimeSpan($this->ElapsedTicks);
    }

}

?>