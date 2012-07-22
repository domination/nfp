<?php

/**
 * Represents a Boolean value.
 */
class System_Boolean extends System_ValueType implements System_IComparable, System_IEquatable {

    //
    //System_IConvertible
    //////////////
    //<editor-fold desc="Methods" defaultstate="collapsed">
    //
    // CompareTo(Boolean)
    // Compares this instance to a specified Boolean object and returns an integer that indicates their relationship to one another.
    // 
    // Equals(Boolean)
    // Returns a value indicating whether this instance is equal to a specified Boolean object.
    // 
    // Equals(Object)
    // Returns a value indicating whether this instance is equal to a specified object. (Overrides ValueType.Equals(Object).)
    // 
    // Finalize
    // Allows an object to try to free resources and perform other cleanup operations before it is reclaimed by garbage collection. (Inherited from Object.)
    // 
    // GetHashCode
    // Returns the hash code for this instance. (Overrides ValueType.GetHashCode().)
    // 
    // GetType
    // Gets the Type of the current instance. (Inherited from Object.)
    // 
    // MemberwiseClone
    // Creates a shallow copy of the current Object. (Inherited from Object.)
    // 
    // Parse
    // Converts the specified string representation of a logical value to its Boolean equivalent, or throws an exception if the string is not equivalent to the value of Boolean.TrueString or Boolean.FalseString.
    // 
    // ToString()
    // Converts the value of this instance to its equivalent string representation (either "True" or "False"). (Overrides ValueType.ToString().)
    // 
    // TryParse
    // Tries to convert the specified string representation of a logical value to its Boolean equivalent. A return value indicates whether the conversion succeeded or failed.
    //    
    //</editor-fold>
    //<editor-fold desc="Fields" defaultstate="collapsed">
    //
    // FalseString
    // Represents the Boolean value false as a string. This field is read-only.
    // 
    // TrueString
    // Represents the Boolean value true as a string. This field is read-only.
    // 
    //</editor-fold>

    public $Value;

    public function CompareTo___T($other) {
        
    }

    public function Equals___T($other) {
        
    }

}

?>