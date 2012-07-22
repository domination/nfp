<?php

/**
 * Provides static methods for creating tuple objects.
 * 
 * Represents a 1-tuple, or singleton.
 * Represents a 2-tuple, or pair.
 * Represents a 3-tuple, or triple.
 * Represents a 4-tuple, or quadruple.
 * Represents a 5-tuple, or quintuple.
 * Represents a 6-tuple, or sextuple.
 * Represents a 7-tuple, or septuple.
 * Represents an n-tuple, where n is 8 or greater.
 */
class System_Tuple extends System_Object implements System_IComparable {
    // IStructuralEquatable, IStructuralComparable, 
    //////////////////
    //
    //<editor-fold desc="Methods" defaultstate="collapsed">

    /**
     * [1]
     * Create<T1>(T1)	Creates a new 1-tuple, or singleton.
     * [2]
     * Create<T1, T2>(T1, T2)	Creates a new 2-tuple, or pair.
     * [3]
     * Create<T1, T2, T3>(T1, T2, T3)	Creates a new 3-tuple, or triple.
     * [4]
     * Create<T1, T2, T3, T4>(T1, T2, T3, T4)	Creates a new 4-tuple, or quadruple.
     * [5]
     * Create<T1, T2, T3, T4, T5>(T1, T2, T3, T4, T5)	Creates a new 5-tuple, or quintuple.
     * [6]
     * Create<T1, T2, T3, T4, T5, T6>(T1, T2, T3, T4, T5, T6)	Creates a new 6-tuple, or sextuple.
     * [7]
     * Create<T1, T2, T3, T4, T5, T6, T7>(T1, T2, T3, T4, T5, T6, T7)	Creates a new 7-tuple, or septuple.
     * [8]
     * Create<T1, T2, T3, T4, T5, T6, T7, T8>(T1, T2, T3, T4, T5, T6, T7, T8)	Creates a new 8-tuple, or octuple.
     */
    public static function Create($item1 = null, $item2 = null, $item3 = null, $item4 = null, $item5 = null, $item6 = null, $item7 = null, $item8 = null) {
        $items = func_get_args();
        if (count($items) < 9)
            return new System_Tuple($items);
        else {
            throw new ErrorException();
        }
    }

    //</editor-fold>
    //
    //<editor-fold desc="Properties" defaultstate="collapsed">
    //
    // Item1	Gets the value of the current Tuple<T1, T2, T3, T4, T5, T6, T7, TRest> object's first component.
    // Item2	Gets the value of the current Tuple<T1, T2, T3, T4, T5, T6, T7, TRest> object's second component.
    // Item3	Gets the value of the current Tuple<T1, T2, T3, T4, T5, T6, T7, TRest> object's third component.
    // Item4	Gets the value of the current Tuple<T1, T2, T3, T4, T5, T6, T7, TRest> object's fourth component.
    // Item5	Gets the value of the current Tuple<T1, T2, T3, T4, T5, T6, T7, TRest> object's fifth component.
    // Item6	Gets the value of the current Tuple<T1, T2, T3, T4, T5, T6, T7, TRest> object's sixth component.
    // Item7	Gets the value of the current Tuple<T1, T2, T3, T4, T5, T6, T7, TRest> object's seventh component.
    // Rest	Gets the current Tuple<T1, T2, T3, T4, T5, T6, T7, TRest> object's remaining components.
    //
    private $items;

    //</editor-fold>
    //
    //<editor-fold desc="Methods" defaultstate="collapsed">
    //
    //<editor-fold desc="Equals" defaultstate="collapsed">

    /**
     * Returns a value that indicates whether the current Tuple<T1, T2, T3, T4, T5, T6, T7, TRest> object is equal to a specified object. (Overrides Object.Equals(Object).)
     * @param System_Object $obj The object to compare with this instance.
     * @return System_Boolean true if the current instance is equal to the specified object; otherwise, false.
     */
    protected function Equals___System_Object(System_Object $obj) {
        //TODO
        if (!is_object($obj)) {
            return false;
        }
        if (is_null($obj) || $this->GetType() !== $obj->GetType() || $this->GetHashCode() !== $obj->GetHashCode()) {
            return false;
        }
        return true;
    }

    //</editor-fold>
    //
    //<editor-fold desc="Finalize" defaultstate="collapsed">
    // Allows an object to try to free resources and perform other cleanup operations before it is reclaimed by garbage collection. (Inherited from Object.)
    //</editor-fold>
    //
    //<editor-fold desc="GetHashCode" defaultstate="collapsed">

    /**
     * Calculates the hash code for the current Tuple<T1, T2, T3, T4, T5, T6, T7, TRest> object. (Overrides Object.GetHashCode().)
     * @return System_Int32 A hash code for the current System_Tuple.
     */
    public function GetHashCode() {
        //TODO
    }

    //</editor-fold>
    //
    //<editor-fold desc="GetType" defaultstate="collapsed">
    // Gets the Type of the current instance. (Inherited from Object.)
    //</editor-fold>
    //
    //<editor-fold desc="MemberwiseClone" defaultstate="collapsed">
    // Creates a shallow copy of the current Object. (Inherited from Object.)
    //</editor-fold>
    //
    //<editor-fold desc="ToString" defaultstate="collapsed">
    // Returns a string that represents the value of this Tuple<T1, T2, T3, T4, T5, T6, T7, TRest> instance. (Overrides Object.ToString().)

    public function ToString() {
        //TODO
    }

    //</editor-fold>
    //
    //</editor-fold>
    //
    //<editor-fold desc="PHP magic methods" defaultstate="collapsed">

    public function __construct($items) {
        $this->items = $items;
    }

    public function __get($name) {
        if (substr($name, 0, 4) == 'Item') {
            $number = (int) substr($name, 4);
            if ($number > 0 && $number <= count($this->items)) {
                return $this->items[$number - 1];
            } else {
                throw new System_ArgumentOutOfRangeException();
            }
        }
        return parent::__get($name);
    }

    //</editor-fold>

    public function CompareTo___T($other) {
        
    }

}

?>