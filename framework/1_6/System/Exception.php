<?php

/**
 * Represents errors that occur during application execution.
 */
class System_Exception extends Exception {
    //
    // ISerializable
    ////////////////////
    //
    //<editor-fold desc="Constructors" defaultstate="collapsed">

    /**
     * Initializes a new instance of the Exception class.
     */
    public function System_Exception___cstor0() {
        $this->System_Exception___cstor1('Exception of type \'System_Exception\' was thrown.');
    }

    /**
     * Initializes a new instance of the Exception class with a specified error message.
     * @param System_String $message The message that describes the error. 
     */
    public function System_Exception___cstor1($message) {
        $code = 0;
        parent::__construct($message, $code);
    }

    /**
     * Initializes a new instance of the Exception class with a specified error message and a reference to the inner exception that is the cause of this exception.
     * @param System_String $message The error message that explains the reason for the exception.
     * @param System_Exception $innerException The exception that is the cause of the current exception, or a null reference (Nothing in Visual Basic) if no inner exception is specified.
     */
    public function System_Exception___cstor2($message, System_Exception $innerException) {
        $this->System_Exception___cstor1($message);
        $this->innerException = $innerException;
    }

    // 
    //</editor-fold>
    //
    //<editor-fold desc="Properties" defaultstate="collapsed">
    //
    //<editor-fold desc="HResult" defaultstate="collapsed">

    /**
     * Gets or sets HRESULT, a coded numerical value that is assigned to a specific exception.
     * @return System_Int32 The HRESULT value.
     */
    protected function getHResult() {
        return $this->getCode();
    }

    /**
     * Gets or sets HRESULT, a coded numerical value that is assigned to a specific exception.
     * @param System_Int32 $code The HRESULT value.
     */
    protected function setHResult($code) {
        $this->code = $code;
    }

    //</editor-fold>
    //
    //<editor-fold desc="InnerException" defaultstate="collapsed">

    private $innerException;

    //defined as private $previous; in Exception?

    /**
     * Gets the Exception instance that caused the current exception.
     */
    public function getInnerException() {
        return $this->innerException;
    }

    //</editor-fold>
    //
    //<editor-fold desc="Message" defaultstate="collapsed">
    //
    // Message	Gets a message that describes the current exception.
    // implemented by Exception
    // 
    //</editor-fold>
    //
    //<editor-fold desc="StackTrace" defaultstate="collapsed">

    /**
     * Gets a string representation of the immediate frames on the call stack.
     * @return System_String A string that describes the immediate frames of the call stack.
     */
    public function getStackTrace() {
        $pieces = explode("\n", $this->getTraceAsString());
        array_pop($pieces);
        array_pop($pieces);
        array_pop($pieces);
        $c = count($pieces) - 1;
        $pieces[$c] = '#' . $c . ' Program::Main()';

        return implode("\n", $pieces);
    }

    //</editor-fold>
    //
    //</editor-fold>
    //
    //<editor-fold desc="Methods" defaultstate="collapsed">
    //
    //<editor-fold desc="Equals" defaultstate="collapsed">

    /**
     * Determines whether the specified System_Object is equal to the current System_Object. (Inherited from Object.)
     * @param System_Object $obj The object to compare with the current object.
     * @return boolean true if the specified System_Object is equal to the current System_Object; otherwise, false.
     */
    private function Equals___System_Object(System_Object $obj) {
        if (!is_object($obj)) {
            return false;
        }
        if (is_null($obj) || $this->GetType() !== $obj->GetType() || $this->GetHashCode() !== $obj->GetHashCode()) {
            return false;
        }
        return true;
    }

    private function Equals___Unknown($obj) {
        return false;
    }

    //</editor-fold>
    //
    //<editor-fold desc="Finalize" defaultstate="collapsed">

    /**
     * Allows an object to try to free resources and perform other cleanup operations before it is reclaimed by garbage collection. (Inherited from Object.)
     */
    protected function Finalize() {
        
    }

    //</editor-fold>
    //
    //<editor-fold desc="GetBaseException" defaultstate="collapsed">

    /**
     * When overridden in a derived class, returns the Exception that is the root cause of one or more subsequent exceptions.
     * @return System_Exception The first exception thrown in a chain of exceptions. If the InnerException property of the current exception is a null reference (Nothing in Visual Basic), this property returns the current exception.
     */
    public function GetBaseException() {
        if ($this->innerException == null) {
            return $this;
        }
        return $this->innerException;
    }

    //</editor-fold>
    //
    //<editor-fold desc="GetHashCode" defaultstate="collapsed">

    /**
     * Serves as a hash function for a particular type. (Inherited from Object.)
     * @return int A hash code for the current System_Object.
     */
    public function GetHashCode() {
        return spl_object_hash($this);
    }

    //</editor-fold>
    //
    //<editor-fold desc="GetType" defaultstate="collapsed">

    /**
     * Gets the runtime type of the current instance.
     * In XNA Framework 3.0, this member is inherited from Object.GetType().
     * In Portable Class Library Portable Class Library, this member is inherited from Object.GetType().
     * @return string A Type object that represents the exact runtime type of the current instance.
     */
    public function GetType() {
        $a[] = get_class($this);
        return implode('.', $a);
    }

    //</editor-fold>
    //
    //<editor-fold desc="MemberwiseClone" defaultstate="collapsed">

    /**
     * Creates a shallow copy of the current System_Object. (Inherited from Object.)
     * @return System_Object A shallow copy of the current System_Object.
     */
    protected function MemberwiseClone() {
        return clone $this;
    }

    //</editor-fold>
    //
    //<editor-fold desc="ReferenceEquals" defaultstate="collapsed">

    /**
     * Determines whether the specified System_Object instances are the same instance.
     * @param System_Object $objA The first object to compare.
     * @param System_Object $objB The second object to compare.
     * @return boolean true if $objA is the same instance as $objB or if both are null; otherwise, false.
     */
    public static function ReferenceEquals($objA, $objB) {
        if ($objA == null && $objB == null) {
            return true;
        }
        if ($objA == $objB) {
            return true;
        }
        return false;
    }

    //</editor-fold>
    //
    //<editor-fold desc="ToString" defaultstate="collapsed">

    /**
     * Creates and returns a string representation of the current exception. (Overrides Object.ToString().)
     * Returns a string that represents the current object.
     * @return string A string that represents the current object.
     */
    public function ToString() {
        return '' . $this->GetType() . ': ' . $this->Message . "\n" . $this->StackTrace;
    }

    //</editor-fold>
    //
    //</editor-fold>
    //
    //<editor-fold desc="PHP magic methods" defaultstate="collapsed">

    public function __construct() {
        $argv = func_get_args();
        return System::cstor($this, $argv);
    }

    public function __destruct() {
        $this->Finalize();
    }

    public function __toString() {
        return $this->ToString();
    }

    public function __get($name) {
        if ($name == 'Message') {
            $fname = 'get_' . $name;
            if (method_exists($this, $fname)) {
                return $this->$fname();
            }
        }
        return System::get($this, $name);
    }

    public function __set($name, $value) {
        return System::set($this, $name, $value);
    }

    public function __call($name, $arguments) {
        return System::call($this, $name, $arguments);
    }

    //</editor-fold>
}

?>