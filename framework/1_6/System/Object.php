<?php

/**
 * Supports all classes in the .NET Framework class hierarchy and provides low-level services to derived classes. This is the ultimate base class of all classes in the .NET Framework; it is the root of the type hierarchy.
 */
class System_Object {
    //
    //<editor-fold desc="Methods" defaultstate="collapsed">
    //
    //<editor-fold desc="Equals" defaultstate="collapsed">

    /**
     * Determines whether the specified System_Object is equal to the current System_Object.
     * @param System_Object $obj The object to compare with the current object.
     * @return boolean true if the specified System_Object is equal to the current System_Object; otherwise, false.
     */
    protected function Equals___System_Object(System_Object $obj) {
        if (!is_object($obj)) {
            return false;
        }
        if (is_null($obj) || $this->GetType() !== $obj->GetType() || $this->GetHashCode() !== $obj->GetHashCode()) {
            return false;
        }
        return true;
    }

    protected function Equals___Unknown($obj) {
        return false;
    }

    //</editor-fold>
    //
    //<editor-fold desc="Finalize" defaultstate="collapsed">

    /**
     * Allows an object to try to free resources and perform other cleanup operations before it is reclaimed by garbage collection.
     */
    protected function Finalize() {
        
    }

    //</editor-fold>
    //
    //<editor-fold desc="GetHashCode" defaultstate="collapsed">

    /**
     * Serves as a hash function for a particular type.
     * @return System_Int32 A hash code for the current System_Object.
     */
    public function GetHashCode() {
        return spl_object_hash($this);
    }

    //</editor-fold>
    //
    //<editor-fold desc="GetType" defaultstate="collapsed">

    /**
     * Gets the Type of the current instance.
     * @return string The exact runtime type of the current instance.
     */
    public function GetType() {
        $a = array_reverse(class_parents($this));
        $a[] = get_class($this);
        return implode('.', $a);
    }

    //</editor-fold>
    //
    //<editor-fold desc="MemberwiseClone" defaultstate="collapsed">

    /**
     * Creates a shallow copy of the current System_Object.
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
     * Returns a string that represents the current object.
     * @return string A string that represents the current object.
     */
    public function ToString() {
        return '[' . $this->GetType() . ']';
    }

    //</editor-fold>
    //
    //</editor-fold>
    //
    //<editor-fold desc="PHP magic methods" defaultstate="collapsed">

    public function __construct() {
        $argv = func_get_args();
        System::cstor($this, $argv);
    }

    public function __destruct() {
        $this->Finalize();
    }

    public function __toString() {
        // try-catch: Method __toString() must not throw an exception
        try {
            return $this->ToString();
        } catch (Exception $ex) {
            trigger_error($ex);
        }
    }

    public function __get($name) {
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