<?php

/**
 * Provides the base class for enumerations.
 */
abstract class System_Enum extends System_ValueType implements System_IFormattable {
    //
    //implements System_IComparable, System_IFormattable, System_IConvertible {
    //
    ////////////
    //
    // Equals
    // Returns a value indicating whether this instance is equal to a specified object. (Overrides ValueType.Equals(Object).)
    //
    // Finalize
    // Allows an object to try to free resources and perform other cleanup operations before it is reclaimed by garbage collection. (Inherited from Object.)
    // 
    // GetHashCode
    // Returns the hash code for the value of this instance. (Overrides ValueType.GetHashCode().)
    // 

    /**
     * Retrieves the name of the constant in the specified enumeration that has the specified value.
     * @param System_Type $enumType An enumeration type.
     * @param System_Object $value The value of a particular enumerated constant in terms of its underlying type.
     * @return System_String A string containing the name of the enumerated constant in enumType whose value is value; or null if no such constant is found.
     */
    public static function GetName($enumType, $value) {
        /*
         * ArgumentNullException	
          enumType or value is null.
         * 
          ArgumentException
          enumType is not an Enum.
          -or-
          value is neither of type enumType nor does it have the same underlying type as enumType.
         */
        $classname = $enumType;
        $x = new ReflectionClass($classname);
        $allConstants = $x->getConstants();
        if (in_array($value, $allConstants)) {
            
        }
    }

    // 
    // GetType
    // Gets the Type of the current instance. (Inherited from Object.)
    // 
    // GetUnderlyingType
    // Returns the underlying type of the specified enumeration.
    // 
    // 

    /**
     * Indicates whether a constant with a specified value exists in a specified enumeration.
     * @param System_Type $enumType The enumeration type to check.
     * @param System_Object $value The value or name of a constant in enumType.
     * @return System_Boolean true if a constant in enumType has a value equal to value; otherwise, false.
     */
    public static function IsDefined($enumType, $value) {
        /*
         * ArgumentNullException	
          enumType or value is null.
         * 
          ArgumentException
          enumType is not an Enum.
          -or-
          The type of value is an enumeration, but it is not an enumeration of type enumType.
          -or-
          The type of value is not an underlying type of enumType.
         * 
          InvalidOperationException
          value is not type SByte, Int16, Int32, Int64, Byte, UInt16, UInt32, or UInt64, or String.
         */
    }

    // 
    // MemberwiseClone
    // Creates a shallow copy of the current Object. (Inherited from Object.)
    // 

    /**
     * Converts the string representation of the name or numeric value of one or more enumerated constants to an equivalent enumerated object. A parameter specifies whether the operation is case-insensitive.
     * @param System_Type $enumType An enumeration type. 
     * @param System_String $value A string containing the name or value to convert. 
     * @param System_Boolean $ignoreCase true to ignore case; false to regard case. 
     * @return System_Object An object of type enumType whose value is represented by value.
     */
    public static function Parse($enumType, $value, $ignoreCase) {
        /*
         * ArgumentNullException	
          enumType or value is null.
         * 
          ArgumentException
          enumType is not an Enum.
          -or-
          value is either an empty string ("") or only contains white space.
          -or-
          value is a name, but not one of the named constants defined for the enumeration.
         * 
          OverflowException
          value is outside the range of the underlying type of enumType.
         */
        return false;
    }

    /**
     * Converts the specified object with an integer value to an enumeration member.
     * @param System_type $enumType The enumeration type to return. 
     * @param System_Object $value The value convert to an enumeration member. 
     * @return System_Object An enumeration object whose value is value.
     */
    public static function ToObject($enumType, $value) {
        /*
         * ArgumentNullException	
          enumType or value is null.
         * 
          ArgumentException
          enumType is not an Enum.
          -or-
          value is not type SByte, Int16, Int32, Int64, Byte, UInt16, UInt32, or UInt64.
         */
        return null;
    }

    // 
    // ToString()
    // Converts the value of this instance to its equivalent string representation. (Overrides ValueType.ToString().)

    /**
     * Converts the value of this instance to its equivalent string representation using the specified format.
     * @param type $format A format string.
     */
    public function ToString($format) {
        return $this->ToString();
    }

}

?>