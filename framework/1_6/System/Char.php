<?php

/**
 * Represents a character as a UTF-16 code unit.
 */
class System_Char extends System_ValueType implements System_IComparable, System_IEquatable {
    //
    //System_IConvertible
    /////////////////
    //<editor-fold desc="Methods" defaultstate="collapsed">
    // CompareTo(Char)	Compares this instance to a specified Char object and indicates whether this instance precedes, follows, or appears in the same position in the sort order as the specified Char object.
    // Equals(Char)	Returns a value that indicates whether this instance is equal to the specified Char object.
    // Equals(Object)	Returns a value that indicates whether this instance is equal to a specified object. (Overrides ValueType.Equals(Object).)
    // Finalize	Allows an object to try to free resources and perform other cleanup operations before it is reclaimed by garbage collection. (Inherited from Object.)
    // GetHashCode	Returns the hash code for this instance. (Overrides ValueType.GetHashCode().)
    // GetNumericValue(Char)	Converts the specified numeric Unicode character to a double-precision floating point number.
    // GetNumericValue(String, Int32)	Converts the numeric Unicode character at the specified position in a specified string to a double-precision floating point number.
    // GetType	Gets the Type of the current instance. (Inherited from Object.)
    // GetUnicodeCategory(Char)	Categorizes a specified Unicode character into a group identified by one of the UnicodeCategory values.
    // GetUnicodeCategory(String, Int32)	Categorizes the character at the specified position in a specified string into a group identified by one of the UnicodeCategory values.
    // IsControl(Char)	Indicates whether the specified Unicode character is categorized as a control character.
    // IsControl(String, Int32)	Indicates whether the character at the specified position in a specified string is categorized as a control character.
    // IsDigit(Char)	Indicates whether the specified Unicode character is categorized as a decimal digit.
    // IsDigit(String, Int32)	Indicates whether the character at the specified position in a specified string is categorized as a decimal digit.
    // IsLetter(Char)	Indicates whether the specified Unicode character is categorized as a Unicode letter.
    // IsLetter(String, Int32)	Indicates whether the character at the specified position in a specified string is categorized as a Unicode letter.
    // IsLetterOrDigit(Char)	Indicates whether the specified Unicode character is categorized as a letter or a decimal digit.
    // IsLetterOrDigit(String, Int32)	Indicates whether the character at the specified position in a specified string is categorized as a letter or a decimal digit.
    // IsLower(Char)	Indicates whether the specified Unicode character is categorized as a lowercase letter.
    // IsLower(String, Int32)	Indicates whether the character at the specified position in a specified string is categorized as a lowercase letter.
    // IsNumber(Char)	Indicates whether the specified Unicode character is categorized as a number.
    // IsNumber(String, Int32)	Indicates whether the character at the specified position in a specified string is categorized as a number.
    // IsPunctuation(Char)	Indicates whether the specified Unicode character is categorized as a punctuation mark.
    // IsPunctuation(String, Int32)	Indicates whether the character at the specified position in a specified string is categorized as a punctuation mark.
    // IsSeparator(Char)	Indicates whether the specified Unicode character is categorized as a separator character.
    // IsSeparator(String, Int32)	Indicates whether the character at the specified position in a specified string is categorized as a separator character.
    // IsSurrogate(Char)	Indicates whether the specified character has a surrogate code unit.
    // IsSurrogate(String, Int32)	Indicates whether the character at the specified position in a specified string has a surrogate code unit.
    // IsSurrogatePair(Char, Char)	Indicates whether the two specified Char objects form a surrogate pair.
    // IsSurrogatePair(String, Int32)	Indicates whether two adjacent Char objects at a specified position in a string form a surrogate pair.
    // IsSymbol(Char)	Indicates whether the specified Unicode character is categorized as a symbol character.
    // IsSymbol(String, Int32)	Indicates whether the character at the specified position in a specified string is categorized as a symbol character.
    // IsUpper(Char)	Indicates whether the specified Unicode character is categorized as an uppercase letter.
    // IsUpper(String, Int32)	Indicates whether the character at the specified position in a specified string is categorized as an uppercase letter.
    // IsWhiteSpace(Char)	Indicates whether the specified Unicode character is categorized as white space.
    // IsWhiteSpace(String, Int32)	Indicates whether the character at the specified position in a specified string is categorized as white space.
    // MemberwiseClone	Creates a shallow copy of the current Object. (Inherited from Object.)
    // ToLower(Char, CultureInfo)	Converts the value of a specified Unicode character to its lowercase equivalent using specified culture-specific formatting information.
    // ToLowerInvariant	Converts the value of a Unicode character to its lowercase equivalent using the casing rules of the invariant culture.
    // ToString()	Converts the value of this instance to its equivalent string representation. (Overrides ValueType.ToString().)
    // ToString(Char)	Converts the specified Unicode character to its equivalent string representation.
    // ToString(IFormatProvider)	Converts the value of this instance to its equivalent string representation using the specified culture-specific format information.
    // ToUpper(Char, CultureInfo)	Converts the value of a specified Unicode character to its uppercase equivalent using specified culture-specific formatting information.
    // ToUpperInvariant	Converts the value of a Unicode character to its uppercase equivalent using the casing rules of the invariant culture.
    // TryParse	Converts the value of the specified string to its equivalent Unicode character. A return code indicates whether the conversion succeeded or failed.
    //</editor-fold>
    //<editor-fold desc="Fields" defaultstate="collapsed">
    //
    // MaxValue
    // Represents the largest possible value of a Char. This field is constant.
    // 
    // MinValue
    // Represents the smallest possible value of a Char. This field is constant.
    // 
    //</editor-fold>
}

?>