<?php

/**
 * Represents a time interval.
 */
class System_TimeSpan extends System_ValueType implements System_IComparable, System_IEquatable, System_IFormattable {
    //
    //<editor-fold desc="Constructors" defaultstate="collapsed">

    /**
     * Initializes a new TimeSpan to the specified number of ticks.
     * @param System_Int64 $ticks A time period expressed in 100-nanosecond units. 
     */
    public function System_TimeSpan___cstor1($ticks) {
        $this->ticks = $ticks;
    }

    /**
     * Initializes a new TimeSpan to a specified number of hours, minutes, and seconds.
     * @param System_Int32 $hours Number of hours.
     * @param System_Int32 $minutes Number of minutes.
     * @param System_Int32 $seconds Number of seconds.
     */
    public function System_TimeSpan___cstor3($hours, $minutes, $seconds) {
        $this->System_TimeSpan___cstor5(0, $hours, $minutes, $seconds, 0);
    }

    /**
     * Initializes a new TimeSpan to a specified number of days, hours, minutes, and seconds.
     * @param System_Int32 $days Number of days. 
     * @param System_Int32 $hours Number of hours.
     * @param System_Int32 $minutes Number of minutes.
     * @param System_Int32 $seconds Number of seconds.
     */
    public function System_TimeSpan___cstor4($days, $hours, $minutes, $seconds) {
        $this->System_TimeSpan___cstor5($days, $hours, $minutes, $seconds, 0);
    }

    /**
     * Initializes a new TimeSpan to a specified number of days, hours, minutes, seconds, and milliseconds.
     * @param System_Int32 $days Number of days. 
     * @param System_Int32 $hours Number of hours.
     * @param System_Int32 $minutes Number of minutes.
     * @param System_Int32 $seconds Number of seconds.
     * @param System_Int32 $milliseconds Number of milliseconds.
     */
    public function System_TimeSpan___cstor5($days, $hours, $minutes, $seconds, $milliseconds) {
        $this->ticks = $days * System_TimeSpan::TicksPerDay
                + $hours * System_TimeSpan::TicksPerHour
                + $minutes * System_TimeSpan::TicksPerMinute
                + $seconds * System_TimeSpan::TicksPerSecond
                + $milliseconds * System_TimeSpan::TicksPerMillisecond;
    }

    // 
    //</editor-fold>
    //
    //<editor-fold desc="Properties" defaultstate="collapsed">

    /**
     * Gets the days component of the time interval represented by the current TimeSpan structure.
     */
    public function getDays() {
        return (int) $this->TotalDays;
    }

    /**
     * Gets the hours component of the time interval represented by the current TimeSpan structure.
     */
    public function getHours() {
        return (int) ($this->TotalHours - (int) ($this->TotalDays) * 24);
    }

    /**
     * Gets the milliseconds component of the time interval represented by the current TimeSpan structure.
     */
    public function getMilliseconds() {
        return (int) ($this->TotalMilliseconds - (int) ($this->TotalSeconds) * 1000);
    }

    /**
     * Gets the minutes component of the time interval represented by the current TimeSpan structure.
     */
    public function getMinutes() {
        return (int) ($this->TotalMinutes - (int) ($this->TotalHours) * 60);
    }

    /**
     * Gets the seconds component of the time interval represented by the current TimeSpan structure.
     */
    public function getSeconds() {
        return (int) ($this->TotalSeconds - (int) ($this->TotalMinutes) * 60);
    }

    /**
     * Gets the number of ticks that represent the value of the current TimeSpan structure.
     */
    public function getTicks() {
        return $this->ticks;
    }

    /**
     * Gets the value of the current TimeSpan structure expressed in whole and fractional days.
     */
    public function getTotalDays() {
        return $this->ticks / System_TimeSpan::TicksPerDay;
    }

    /**
     * Gets the value of the current TimeSpan structure expressed in whole and fractional hours.
     */
    public function getTotalHours() {
        return $this->ticks / System_TimeSpan::TicksPerHour;
    }

    /**
     * Gets the value of the current TimeSpan structure expressed in whole and fractional milliseconds.
     */
    public function getTotalMilliseconds() {
        return $this->ticks / System_TimeSpan::TicksPerMillisecond;
    }

    /**
     * Gets the value of the current TimeSpan structure expressed in whole and fractional minutes.
     */
    public function getTotalMinutes() {
        return $this->ticks / System_TimeSpan::TicksPerMinute;
    }

    /**
     * Gets the value of the current TimeSpan structure expressed in whole and fractional seconds.
     */
    public function getTotalSeconds() {
        return $this->ticks / System_TimeSpan::TicksPerSecond;
    }

    //</editor-fold>
    //
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
    public function ToString() {
        return sprintf('%s%02d:%02d:%02d.%07d', ($this->Days > 0 ? $this->Days . '.' : ''), $this->Hours, $this->Minutes, $this->Seconds, round(($this->TotalSeconds - (int) $this->TotalSeconds) * System_TimeSpan::TicksPerSecond));
    }

    // TryParse(String, TimeSpan)	Converts the string representation of a time interval to its TimeSpan equivalent and returns a value that indicates whether the conversion succeeded.
    //
    //</editor-fold>
    //
    //<editor-fold desc="Fields" defaultstate="collapsed">
    //
    // MaxValue	Represents the maximum TimeSpan value. This field is read-only.
    // MinValue	Represents the minimum TimeSpan value. This field is read-only.

    /**
     * Represents the number of ticks in 1 day. This field is constant.
     */

    const TicksPerDay = 864000000000;
    /**
     * Represents the number of ticks in 1 hour. This field is constant.
     */
    const TicksPerHour = 36000000000;
    /**
     * Represents the number of ticks in 1 millisecond. This field is constant.
     */
    const TicksPerMillisecond = 10000;
    /**
     * Represents the number of ticks in 1 minute. This field is constant.
     */
    const TicksPerMinute = 600000000;
    /**
     * Represents the number of ticks in 1 second.
     */
    const TicksPerSecond = 10000000;
    /**
     * Represents the zero TimeSpan value. This field is read-only.
     */
    const Zero = 0;

    //</editor-fold>
    //
    
    //move to ValueType as Value?
    private $ticks;

    public function CompareTo___T($other) {
        
    }

    public function Equals___T($other) {
        
    }

    public function ToString___($format, System_IFormatProvider $formatProvider) {
        
    }
}

?>