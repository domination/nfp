<?php

/**
 * Represents a double-precision floating-point number.
 */
class System_Double extends System_ValueType implements System_IComparable, System_IFormattable, System_IEquatable {

    //
    //IConvertible
    //////////////////
    //<editor-fold desc="Methods" defaultstate="collapsed">
    //
    // CompareTo(Double)	Compares this instance to a specified double-precision floating-point number and returns an integer that indicates whether the value of this instance is less than, equal to, or greater than the value of the specified double-precision floating-point number.
    // Equals(Double)	Returns a value indicating whether this instance and a specified Double object represent the same value.
    // Equals(Object)	Returns a value indicating whether this instance is equal to a specified object. (Overrides ValueType.Equals(Object).)
    // Finalize	Allows an object to try to free resources and perform other cleanup operations before it is reclaimed by garbage collection. (Inherited from Object.)
    // GetHashCode	Returns the hash code for this instance. (Overrides ValueType.GetHashCode().)
    // GetType	Gets the Type of the current instance. (Inherited from Object.)
    // IsInfinity	Returns a value indicating whether the specified number evaluates to negative or positive infinity
    // IsNaN	Returns a value indicating whether the specified number evaluates to a value that is not a number (NaN).
    // IsNegativeInfinity	Returns a value indicating whether the specified number evaluates to negative infinity.
    // IsPositiveInfinity	Returns a value indicating whether the specified number evaluates to positive infinity.
    // MemberwiseClone	Creates a shallow copy of the current Object. (Inherited from Object.)    	
    // Parse(String, IFormatProvider)	Converts the string representation of a number in a specified culture-specific format to its double-precision floating-point number equivalent.
    // Parse(String, NumberStyles, IFormatProvider)	Converts the string representation of a number in a specified style and culture-specific format to its double-precision floating-point number equivalent.
    // ToString()	Converts the numeric value of this instance to its equivalent string representation. (Overrides ValueType.ToString().)
    // ToString(IFormatProvider)	Converts the numeric value of this instance to its equivalent string representation using the specified culture-specific format information.
    // ToString(String, IFormatProvider)	Converts the numeric value of this instance to its equivalent string representation using the specified format and culture-specific format information.

    public function ToString($format, System_IFormatProvider $formatProvider) {
        
    }

    // TryParse(String, NumberStyles, IFormatProvider, Double)	Converts the string representation of a number in a specified style and culture-specific format to its double-precision floating-point number equivalent. A return value indicates whether the conversion succeeded or failed.
    // 
    //</editor-fold>
    //<editor-fold desc="Operators" defaultstate="collapsed">
    //</editor-fold>
    //<editor-fold desc="Fields" defaultstate="collapsed">
    //
    // Epsilon	Represents the smallest positive Double value that is greater than zero. This field is constant.
    // MaxValue	Represents the largest possible value of a Double. This field is constant.
    // MinValue	Represents the smallest possible value of a Double. This field is constant.
    // NaN	Represents a value that is not a number (NaN). This field is constant.
    // NegativeInfinity	Represents negative infinity. This field is constant.
    // PositiveInfinity	Represents positive infinity. This field is constant.
    // 
    //</editor-fold>
}

?>