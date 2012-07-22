<?php

/**
 * Represents an instant in time, typically expressed as a date and time of day.
 */
class System_DateTime extends System_ValueType implements System_IComparable, System_IFormattable, System_IEquatable {

    //
    //System_IConvertible,  ISerializable,
    /////////////////
    //<editor-fold desc="Constructors" defaultstate="collapsed">
    //
    // DateTime(Int64)	Initializes a new instance of the DateTime structure to a specified number of ticks.
    // DateTime(Int64, DateTimeKind)	Initializes a new instance of the DateTime structure to a specified number of ticks and to Coordinated Universal Time (UTC) or local time.
    // DateTime(Int32, Int32, Int32)	Initializes a new instance of the DateTime structure to the specified year, month, and day.
    // DateTime(Int32, Int32, Int32, Calendar)	Initializes a new instance of the DateTime structure to the specified year, month, and day for the specified calendar.
    // DateTime(Int32, Int32, Int32, Int32, Int32, Int32)	Initializes a new instance of the DateTime structure to the specified year, month, day, hour, minute, and second.
    // DateTime(Int32, Int32, Int32, Int32, Int32, Int32, DateTimeKind)	Initializes a new instance of the DateTime structure to the specified year, month, day, hour, minute, second, and Coordinated Universal Time (UTC) or local time.
    // DateTime(Int32, Int32, Int32, Int32, Int32, Int32, Calendar)	Initializes a new instance of the DateTime structure to the specified year, month, day, hour, minute, and second for the specified calendar.
    // DateTime(Int32, Int32, Int32, Int32, Int32, Int32, Int32)	Initializes a new instance of the DateTime structure to the specified year, month, day, hour, minute, second, and millisecond.
    // DateTime(Int32, Int32, Int32, Int32, Int32, Int32, Int32, DateTimeKind)	Initializes a new instance of the DateTime structure to the specified year, month, day, hour, minute, second, millisecond, and Coordinated Universal Time (UTC) or local time.
    // DateTime(Int32, Int32, Int32, Int32, Int32, Int32, Int32, Calendar)	Initializes a new instance of the DateTime structure to the specified year, month, day, hour, minute, second, and millisecond for the specified calendar.
    // DateTime(Int32, Int32, Int32, Int32, Int32, Int32, Int32, Calendar, DateTimeKind)	Initializes a new instance of the DateTime structure to the specified year, month, day, hour, minute, second, millisecond, and Coordinated Universal Time (UTC) or local time for the specified calendar.
    // 
    //</editor-fold>
    //<editor-fold desc="Properties" defaultstate="collapsed">
    //
    // Date	Gets the date component of this instance.
    // Day	Gets the day of the month represented by this instance.
    // DayOfWeek	Gets the day of the week represented by this instance.
    // DayOfYear	Gets the day of the year represented by this instance.
    // Hour	Gets the hour component of the date represented by this instance.
    // Kind	Gets a value that indicates whether the time represented by this instance is based on local time, Coordinated Universal Time (UTC), or neither.
    // Millisecond	Gets the milliseconds component of the date represented by this instance.
    // Minute	Gets the minute component of the date represented by this instance.
    // Month	Gets the month component of the date represented by this instance.
    // Now	Gets a DateTime object that is set to the current date and time on this computer, expressed as the local time.
    // Second	Gets the seconds component of the date represented by this instance.
    // Ticks	Gets the number of ticks that represent the date and time of this instance.
    // TimeOfDay	Gets the time of day for this instance.
    // Today	Gets the current date.
    // UtcNow	Gets a DateTime object that is set to the current date and time on this computer, expressed as the Coordinated Universal Time (UTC).
    // Year	Gets the year component of the date represented by this instance.
    // 
    //</editor-fold>
    //<editor-fold desc="Methods" defaultstate="collapsed">
    //
    // Add	Returns a new DateTime that adds the value of the specified TimeSpan to the value of this instance.
    // AddDays	Returns a new DateTime that adds the specified number of days to the value of this instance.
    // AddHours	Returns a new DateTime that adds the specified number of hours to the value of this instance.
    // AddMilliseconds	Returns a new DateTime that adds the specified number of milliseconds to the value of this instance.
    // AddMinutes	Returns a new DateTime that adds the specified number of minutes to the value of this instance.
    // AddMonths	Returns a new DateTime that adds the specified number of months to the value of this instance.
    // AddSeconds	Returns a new DateTime that adds the specified number of seconds to the value of this instance.
    // AddTicks	Returns a new DateTime that adds the specified number of ticks to the value of this instance.
    // AddYears	Returns a new DateTime that adds the specified number of years to the value of this instance.
    // Compare	Compares two instances of DateTime and returns an integer that indicates whether the first instance is earlier than, the same as, or later than the second instance.
    // CompareTo(DateTime)	Compares the value of this instance to a specified DateTime value and returns an integer that indicates whether this instance is earlier than, the same as, or later than the specified DateTime value.
    // DaysInMonth	Returns the number of days in the specified month and year.
    // Equals(DateTime)	Returns a value indicating whether the value of this instance is equal to the value of the specified DateTime instance.
    // Equals(Object)	Returns a value indicating whether this instance is equal to a specified object. (Overrides ValueType.Equals(Object).)
    // Equals(DateTime, DateTime)	Returns a value indicating whether two DateTime instances have the same date and time value.
    // Finalize	Allows an object to try to free resources and perform other cleanup operations before it is reclaimed by garbage collection. (Inherited from Object.)
    // GetHashCode	Returns the hash code for this instance. (Overrides ValueType.GetHashCode().)
    // GetType	Gets the Type of the current instance. (Inherited from Object.)
    // IsDaylightSavingTime	Indicates whether this instance of DateTime is within the daylight saving time range for the current time zone.
    // IsLeapYear	Returns an indication whether the specified year is a leap year.
    // MemberwiseClone	Creates a shallow copy of the current Object. (Inherited from Object.)
    // Parse(String, IFormatProvider)	Converts the specified string representation of a date and time to its DateTime equivalent using the specified culture-specific format information.
    // Parse(String, IFormatProvider, DateTimeStyles)	Converts the specified string representation of a date and time to its DateTime equivalent using the specified culture-specific format information and formatting style.
    // ParseExact(String, String, IFormatProvider)	Converts the specified string representation of a date and time to its DateTime equivalent using the specified format and culture-specific format information. The format of the string representation must match the specified format exactly.
    // ParseExact(String, String, IFormatProvider, DateTimeStyles)	Converts the specified string representation of a date and time to its DateTime equivalent using the specified format, culture-specific format information, and style. The format of the string representation must match the specified format exactly or an exception is thrown.
    // ParseExact(String, String[], IFormatProvider, DateTimeStyles)	Converts the specified string representation of a date and time to its DateTime equivalent using the specified array of formats, culture-specific format information, and style. The format of the string representation must match at least one of the specified formats exactly or an exception is thrown.
    // SpecifyKind	Creates a new DateTime object that has the same number of ticks as the specified DateTime, but is designated as either local time, Coordinated Universal Time (UTC), or neither, as indicated by the specified DateTimeKind value.
    // Subtract(DateTime)	Subtracts the specified date and time from this instance.
    // Subtract(TimeSpan)	Subtracts the specified duration from this instance.
    // ToLocalTime	Converts the value of the current DateTime object to local time.
    // ToString()	Converts the value of the current DateTime object to its equivalent string representation. (Overrides ValueType.ToString().)
    // ToString(IFormatProvider)	Converts the value of the current DateTime object to its equivalent string representation using the specified culture-specific format information.
    // ToString(String, IFormatProvider)	Converts the value of the current DateTime object to its equivalent string representation using the specified format and culture-specific format information.

    public function ToString($format, System_IFormatProvider $formatProvider) {
        
    }

    // ToUniversalTime	Converts the value of the current DateTime object to Coordinated Universal Time (UTC).
    // TryParse(String, IFormatProvider, DateTimeStyles, DateTime)	Converts the specified string representation of a date and time to its DateTime equivalent using the specified culture-specific format information and formatting style, and returns a value that indicates whether the conversion succeeded.
    // TryParseExact(String, String, IFormatProvider, DateTimeStyles, DateTime)	Converts the specified string representation of a date and time to its DateTime equivalent using the specified format, culture-specific format information, and style. The format of the string representation must match the specified format exactly. The method returns a value that indicates whether the conversion succeeded.
    // TryParseExact(String, String[], IFormatProvider, DateTimeStyles, DateTime)	Converts the specified string representation of a date and time to its DateTime equivalent using the specified array of formats, culture-specific format information, and style. The format of the string representation must match at least one of the specified formats exactly. The method returns a value that indicates whether the conversion succeeded.
    // 
    //</editor-fold>
    //<editor-fold desc="Operators" defaultstate="collapsed">
    //</editor-fold>
    //<editor-fold desc="Fields" defaultstate="collapsed">
    //
    // MaxValue	Represents the largest possible value of DateTime. This field is read-only.
    // 
    // MinValue	Represents the smallest possible value of DateTime. This field is read-only.
    // 
    //</editor-fold>
}

?>