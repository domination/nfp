<?php

class System_String extends System_Object implements System_IComparable, System_ICloneable, System_IEquatable {
    //    
    //IConvertible,IEnumerable<char>, IEnumerable
    /////////////
    //<editor-fold desc="Constructors" defaultstate="collapsed">
    //
    // String(Char[])	Initializes a new instance of the String class to the value indicated by an array of Unicode characters.
    //
    //</editor-fold>
    //<editor-fold desc="Properties" defaultstate="collapsed">
    //
    // Chars	Gets the Char object at a specified position in the current String object.
    // Length	Gets the number of characters in the current String object.
    //
    //</editor-fold>
    //<editor-fold desc="Methods" defaultstate="collapsed">
    //
    // Compare(String, String, StringComparison)	Compares two specified String objects using the specified rules, and returns an integer that indicates their relative position in the sort order.
    // Compare(String, String, CultureInfo, CompareOptions)	Compares two specified String objects using the specified comparison options and culture-specific information to influence the comparison, and returns an integer that indicates the relationship of the two strings to each other in the sort order.
    // Compare(String, Int32, String, Int32, Int32, StringComparison)	Compares substrings of two specified String objects using the specified rules, and returns an integer that indicates their relative position in the sort order.
    // CompareOrdinal(String, String)	Compares two specified String objects by evaluating the numeric values of the corresponding Char objects in each string.
    // CompareOrdinal(String, Int32, String, Int32, Int32)	Compares substrings of two specified String objects by evaluating the numeric values of the corresponding Char objects in each substring.
    // Concat(Object)	Creates the string representation of a specified object.
    // Concat(Object[])	Concatenates the string representations of the elements in a specified Object array.
    // Concat(String[])	Concatenates the elements of a specified String array.
    // Concat(Object, Object)	Concatenates the string representations of two specified objects.
    // Concat(String, String)	Concatenates two specified instances of String.
    // Concat(Object, Object, Object)	Concatenates the string representations of three specified objects.
    // Concat(String, String, String)	Concatenates three specified instances of String.
    // Concat(String, String, String, String)	Concatenates four specified instances of String.
    // Contains	Returns a value indicating whether the specified String object occurs within this string.
    // CopyTo	Copies a specified number of characters from a specified position in this instance to a specified position in an array of Unicode characters.
    // EndsWith(String, StringComparison)	Determines whether the end of this string instance matches the specified string when compared using the specified comparison option.
    // Equals(Object)	Determines whether this instance and a specified object, which must also be a String object, have the same value. (Overrides Object.Equals(Object).)
    // Equals(String)	Determines whether this instance and another specified String object have the same value.
    // Equals(String, String)	Determines whether two specified String objects have the same value.
    // Equals(String, StringComparison)	Determines whether this string and a specified String object have the same value. A parameter specifies the culture, case, and sort rules used in the comparison.
    // Equals(String, String, StringComparison)	Determines whether two specified String objects have the same value. A parameter specifies the culture, case, and sort rules used in the comparison.
    // Finalize	Allows an object to try to free resources and perform other cleanup operations before it is reclaimed by garbage collection. (Inherited from Object.)
    // Format(String, Object[])	Replaces the format item in a specified string with the string representation of a corresponding object in a specified array.
    // Format(IFormatProvider, String, Object[])	Replaces the format item in a specified string with the string representation of a corresponding object in a specified array. A specified parameter supplies culture-specific formatting information.
    // GetHashCode	Returns the hash code for this string. (Overrides Object.GetHashCode().)
    // GetType	Gets the Type of the current instance. (Inherited from Object.)
    // IndexOf(Char)	Reports the zero-based index of the first occurrence of the specified Unicode character in this string.
    // IndexOf(Char, Int32)	Reports the zero-based index of the first occurrence of the specified Unicode character in this string. The search starts at a specified character position.
    // IndexOf(String, StringComparison)	Reports the zero-based index of the first occurrence of the specified string in the current String object. A parameter specifies the type of search to use for the specified string.
    // IndexOf(Char, Int32, Int32)	Reports the zero-based index of the first occurrence of the specified character in this instance. The search starts at a specified character position and examines a specified number of character positions.
    // IndexOf(String, Int32, StringComparison)	Reports the zero-based index of the first occurrence of the specified string in the current String object. Parameters specify the starting search position in the current string and the type of search to use for the specified string.
    // IndexOf(String, Int32, Int32, StringComparison)	Reports the zero-based index of the first occurrence of the specified string in the current String object. Parameters specify the starting search position in the current string, the number of characters in the current string to search, and the type of search to use for the specified string.
    // IndexOfAny(Char[])	Reports the zero-based index of the first occurrence in this instance of any character in a specified array of Unicode characters.
    // IndexOfAny(Char[], Int32)	Reports the zero-based index of the first occurrence in this instance of any character in a specified array of Unicode characters. The search starts at a specified character position.
    // IndexOfAny(Char[], Int32, Int32)	Reports the zero-based index of the first occurrence in this instance of any character in a specified array of Unicode characters. The search starts at a specified character position and examines a specified number of character positions.
    // Insert	Returns a new string in which a specified string is inserted at a specified index position in this instance.
    // IsNullOrEmpty	Indicates whether the specified string is null or an Empty string.
    // Join(String, String[])	Concatenates all the elements of a string array, using the specified separator between each element.
    // Join(String, String[], Int32, Int32)	Concatenates the specified elements of a string array, using the specified separator between each element.
    // LastIndexOf(Char)	Reports the zero-based index position of the last occurrence of a specified Unicode character within this instance.
    // LastIndexOf(Char, Int32)	Reports the zero-based index position of the last occurrence of a specified Unicode character within this instance. The search starts at a specified character position.
    // LastIndexOf(String, StringComparison)	Reports the zero-based index of the last occurrence of a specified string within the current String object. A parameter specifies the type of search to use for the specified string.
    // LastIndexOf(Char, Int32, Int32)	Reports the zero-based index position of the last occurrence of the specified Unicode character in a substring within this instance. The search starts at a specified character position and examines a specified number of character positions.
    // LastIndexOf(String, Int32, StringComparison)	Reports the zero-based index of the last occurrence of a specified string within the current String object. Parameters specify the starting search position in the current string, and type of search to use for the specified string.
    // LastIndexOf(String, Int32, Int32, StringComparison)	Reports the zero-based index position of the last occurrence of a specified string within this instance. Parameters specify the starting search position in the current string, the number of characters in the current string to search, and the type of search to use for the specified string.
    // LastIndexOfAny(Char[])	Reports the zero-based index position of the last occurrence in this instance of one or more characters specified in a Unicode array.
    // LastIndexOfAny(Char[], Int32)	Reports the zero-based index position of the last occurrence in this instance of one or more characters specified in a Unicode array. The search starts at a specified character position.
    // LastIndexOfAny(Char[], Int32, Int32)	Reports the zero-based index position of the last occurrence in this instance of one or more characters specified in a Unicode array. The search starts at a specified character position and examines a specified number of character positions.
    // MemberwiseClone	Creates a shallow copy of the current Object. (Inherited from Object.)
    // PadLeft(Int32)	Returns a new string that right-aligns the characters in this instance by padding them with spaces on the left, for a specified total length.
    // PadLeft(Int32, Char)	Returns a new string that right-aligns the characters in this instance by padding them on the left with a specified Unicode character, for a specified total length.
    // PadRight(Int32)	Returns a new string that left-aligns the characters in this string by padding them with spaces on the right, for a specified total length.
    // PadRight(Int32, Char)	Returns a new string that left-aligns the characters in this string by padding them on the right with a specified Unicode character, for a specified total length.
    // Remove(Int32, Int32)	Returns a new string in which a specified number of characters in this instance beginning at a specified position have been deleted.
    // Replace(Char, Char)	Returns a new string in which all occurrences of a specified Unicode character in this instance are replaced with another specified Unicode character.
    // Replace(String, String)	Returns a new string in which all occurrences of a specified string in the current instance are replaced with another specified string.
    // Split(Char[])	Returns a string array that contains the substrings in this instance that are delimited by elements of a specified Unicode character array.
    // Split(Char[], StringSplitOptions)	Returns a string array that contains the substrings in this string that are delimited by elements of a specified Unicode character array. A parameter specifies whether to return empty array elements.
    // Split(String[], StringSplitOptions)	Returns a string array that contains the substrings in this string that are delimited by elements of a specified string array. A parameter specifies whether to return empty array elements.
    // StartsWith(String, StringComparison)	Determines whether the beginning of this string instance matches the specified string when compared using the specified comparison option.
    // Substring(Int32)	Retrieves a substring from this instance. The substring starts at a specified character position.
    // Substring(Int32, Int32)	Retrieves a substring from this instance. The substring starts at a specified character position and has a specified length.
    // ToCharArray()	Copies the characters in this instance to a Unicode character array.
    // ToLowerInvariant	Returns a copy of this String object converted to lowercase using the casing rules of the invariant culture.
    // ToString()	Returns this instance of String; no actual conversion is performed. (Overrides Object.ToString().)
    // ToUpperInvariant	Returns a copy of this String object converted to uppercase using the casing rules of the invariant culture.
    // Trim()	Removes all leading and trailing white-space characters from the current String object.
    // Trim(Char[])	Removes all leading and trailing occurrences of a set of characters specified in an array from the current String object.
    // TrimEnd	Removes all trailing occurrences of a set of characters specified in an array from the current String object.
    // TrimStart	Removes all leading occurrences of a set of characters specified in an array from the current String object.
    // 
    //</editor-fold>
    //<editor-fold desc="Operators" defaultstate="collapsed">
    //</editor-fold>
    //<editor-fold desc="Fields" defaultstate="collapsed">
    //
    // Empty	Represents the empty string. This field is read-only.
    //
    //</editor-fold>
    
    
    public function Clone___() {
        
    }
    public function CompareTo___T($other) {
        
    }
    public function Equals___T($other) {
        
    }
}

?>