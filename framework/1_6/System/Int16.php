<?php

/**
 * Represents a 16-bit signed integer.
 */
class System_Int16 extends System_ValueType implements System_IComparable, System_IFormattable, System_IEquatable {

    //
    // System_IConvertible
    ///////////////////////
    //<editor-fold desc="Methods" defaultstate="collapsed">
    //
    // CompareTo(Int16)	Compares this instance to a specified 16-bit signed integer and returns an integer that indicates whether the value of this instance is less than, equal to, or greater than the value of the specified 16-bit signed integer.
    // Equals(Int16)	Returns a value indicating whether this instance is equal to a specified Int16 value.
    // Equals(Object)	Returns a value indicating whether this instance is equal to a specified object. (Overrides ValueType.Equals(Object).)
    // Finalize	Allows an object to try to free resources and perform other cleanup operations before it is reclaimed by garbage collection. (Inherited from Object.)
    // GetHashCode	Returns the hash code for this instance. (Overrides ValueType.GetHashCode().)
    // GetType	Gets the Type of the current instance. (Inherited from Object.)
    // MemberwiseClone	Creates a shallow copy of the current Object. (Inherited from Object.)
    // Parse(String, IFormatProvider)	Converts the string representation of a number in a specified culture-specific format to its 16-bit signed integer equivalent.
    // Parse(String, NumberStyles, IFormatProvider)	Converts the string representation of a number in a specified style and culture-specific format to its 16-bit signed integer equivalent.
    // ToString()	Converts the numeric value of this instance to its equivalent string representation. (Overrides ValueType.ToString().)
    // ToString(IFormatProvider)	Converts the numeric value of this instance to its equivalent string representation using the specified culture-specific format information.
    // ToString(String, IFormatProvider)	Converts the numeric value of this instance to its equivalent string representation using the specified format and culture-specific formatting information.
    public function ToString($format, System_IFormatProvider $formatProvider) {
        
    }

    // TryParse(String, NumberStyles, IFormatProvider, Int16)	Converts the string representation of a number in a specified style and culture-specific format to its 16-bit signed integer equivalent. A return value indicates whether the conversion succeeded or failed.
    //
    //</editor-fold>
    //<editor-fold desc="Fields" defaultstate="collapsed">
    //
    // MaxValue	Represents the largest possible value of an Int16. This field is constant.
    // MinValue	Represents the smallest possible value of Int16. This field is constant.
    // 
    //</editor-fold>
}

?>