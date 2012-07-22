<?php

/**
 * Represents a time interval.
 */
class System_TimeSpan extends System_Object implements System_IComparable, System_IEquatable, System_IFormattable {
    //<editor-fold desc="Constructors" defaultstate="collapsed">
    //
    // TimeSpan(Int64)	Initializes a new TimeSpan to the specified number of ticks.
    // TimeSpan(Int32, Int32, Int32)	Initializes a new TimeSpan to a specified number of hours, minutes, and seconds.
    // TimeSpan(Int32, Int32, Int32, Int32)	Initializes a new TimeSpan to a specified number of days, hours, minutes, and seconds.
    // TimeSpan(Int32, Int32, Int32, Int32, Int32)	Initializes a new TimeSpan to a specified number of days, hours, minutes, seconds, and milliseconds.
    // 
    //</editor-fold>
    //<editor-fold desc="Properties" defaultstate="collapsed">
    //
    // Days	Gets the days component of the time interval represented by the current TimeSpan structure.
    // Hours	Gets the hours component of the time interval represented by the current TimeSpan structure.
    // Milliseconds	Gets the milliseconds component of the time interval represented by the current TimeSpan structure.
    // Minutes	Gets the minutes component of the time interval represented by the current TimeSpan structure.
    // Seconds	Gets the seconds component of the time interval represented by the current TimeSpan structure.
    // Ticks	Gets the number of ticks that represent the value of the current TimeSpan structure.
    // TotalDays	Gets the value of the current TimeSpan structure expressed in whole and fractional days.
    // TotalHours	Gets the value of the current TimeSpan structure expressed in whole and fractional hours.
    // TotalMilliseconds	Gets the value of the current TimeSpan structure expressed in whole and fractional milliseconds.
    // TotalMinutes	Gets the value of the current TimeSpan structure expressed in whole and fractional minutes.
    // TotalSeconds	Gets the value of the current TimeSpan structure expressed in whole and fractional seconds.
    //
    //</editor-fold>
    //<editor-fold desc="Methods" defaultstate="collapsed">
    //
    // Add	Returns a new TimeSpan object whose value is the sum of the specified TimeSpan object and this instance.
    // Compare	Compares two TimeSpan values and returns an integer that indicates whether the first value is shorter than, equal to, or longer than the second value.
    // CompareTo(TimeSpan)	Compares this instance to a specified TimeSpan object and returns an integer that indicates whether this instance is shorter than, equal to, or longer than the TimeSpan object.
    // Duration	Returns a new TimeSpan object whose value is the absolute value of the current TimeSpan object.
    // Equals(Object)	Returns a value indicating whether this instance is equal to a specified object. (Overrides ValueType.Equals(Object).)
    // Equals(TimeSpan)	Returns a value indicating whether this instance is equal to a specified TimeSpan object.
    // Equals(TimeSpan, TimeSpan)	Returns a value that indicates whether two specified instances of TimeSpan are equal.
    // Finalize	Allows an object to try to free resources and perform other cleanup operations before it is reclaimed by garbage collection. (Inherited from Object.)
    // FromDays	Returns a TimeSpan that represents a specified number of days, where the specification is accurate to the nearest millisecond.
    // FromHours	Returns a TimeSpan that represents a specified number of hours, where the specification is accurate to the nearest millisecond.
    // FromMilliseconds	Returns a TimeSpan that represents a specified number of milliseconds.
    // FromMinutes	Returns a TimeSpan that represents a specified number of minutes, where the specification is accurate to the nearest millisecond.
    // FromSeconds	Returns a TimeSpan that represents a specified number of seconds, where the specification is accurate to the nearest millisecond.
    // FromTicks	Returns a TimeSpan that represents a specified time, where the specification is in units of ticks.
    // GetHashCode	Returns a hash code for this instance. (Overrides ValueType.GetHashCode().)
    // GetType	Gets the Type of the current instance. (Inherited from Object.)
    // MemberwiseClone	Creates a shallow copy of the current Object. (Inherited from Object.)
    // Negate	Returns a new TimeSpan object whose value is the negated value of this instance.
    // Parse(String)	Converts the string representation of a time interval to its TimeSpan equivalent.
    // Subtract	Returns a new TimeSpan object whose value is the difference between the specified TimeSpan object and this instance.
    // ToString()	Converts the value of the current TimeSpan object to its equivalent string representation. (Overrides ValueType.ToString().)
    // TryParse(String, TimeSpan)	Converts the string representation of a time interval to its TimeSpan equivalent and returns a value that indicates whether the conversion succeeded.
    //
    //</editor-fold>
    //<editor-fold desc="Operators" defaultstate="collapsed">
    //</editor-fold>
    //<editor-fold desc="Fields" defaultstate="collapsed">
    //
    // MaxValue	Represents the maximum TimeSpan value. This field is read-only.
    // MinValue	Represents the minimum TimeSpan value. This field is read-only.
    // TicksPerDay	Represents the number of ticks in 1 day. This field is constant.
    // TicksPerHour	Represents the number of ticks in 1 hour. This field is constant.
    // TicksPerMillisecond	Represents the number of ticks in 1 millisecond. This field is constant.
    // TicksPerMinute	Represents the number of ticks in 1 minute. This field is constant.
    // TicksPerSecond	Represents the number of ticks in 1 second.
    // Zero	Represents the zero TimeSpan value. This field is read-only.
    //
    //</editor-fold>
    
    public function CompareTo___T($other) {
        
    }
    public function Equals___T($other) {
        
    }
}

?>