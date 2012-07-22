<?php

/**
 * Represents an 8-bit unsigned integer.
 */
class System_Byte extends System_ValueType implements System_IComparable, System_IFormattable, System_IEquatable {
    //
    //System_IConvertible
    /////////////////
    //<editor-fold desc="Methods" defaultstate="collapsed">
    //
    // CompareTo(Byte)
    // Compares this instance to a specified 8-bit unsigned integer and returns an indication of their relative values.
    // 
    // Equals(Byte)
    // Returns a value indicating whether this instance and a specified Byte object represent the same value.
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
    // 
    // Parse(String, IFormatProvider)
    // Converts the string representation of a number in a specified culture-specific format to its Byte equivalent.
    // 
    // Parse(String, NumberStyles, IFormatProvider)
    // Converts the string representation of a number in a specified style and culture-specific format to its Byte equivalent.
    // 
    // ToString()
    // Converts the value of the current Byte object to its equivalent string representation. (Overrides ValueType.ToString().)
    // 
    // ToString(IFormatProvider)
    // Converts the numeric value of the current Byte object to its equivalent string representation using the specified culture-specific formatting information.
    // 

    /**
     * Converts the value of the current Byte object to its equivalent string representation using the specified format and culture-specific formatting information.
     * @param System_String $format
     * @param System_IFormatProvider $formatProvider 
     * @return System_String
     */
    public function ToString($format, System_IFormatProvider $formatProvider) {
        
    }

    // 
    // TryParse(String, NumberStyles, IFormatProvider, Byte)
    // Converts the string representation of a number in a specified style and culture-specific format to its Byte equivalent. A return value indicates whether the conversion succeeded or failed.
    //
    //</editor-fold>
    //<editor-fold desc="Fields" defaultstate="collapsed">
    //
    // MaxValue
    // Represents the largest possible value of a Byte. This field is constant.
    //
    // MinValue
    // Represents the smallest possible value of a Byte. This field is constant.
    // 
    //</editor-fold>
}

?>