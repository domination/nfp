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
    //
    //<editor-fold desc="Days" defaultstate="collapsed">

    /**
     * Gets the days component of the time interval represented by the current TimeSpan structure.
     */
    public function getDays() {
        return (int) $this->TotalDays;
    }

    //</editor-fold>
    //
    //<editor-fold desc="Hours" defaultstate="collapsed">

    /**
     * Gets the hours component of the time interval represented by the current TimeSpan structure.
     */
    public function getHours() {
        return (int) ($this->TotalHours - (int) ($this->TotalDays) * 24);
    }

    //</editor-fold>
    //
    //<editor-fold desc="Milliseconds" defaultstate="collapsed">

    /**
     * Gets the milliseconds component of the time interval represented by the current TimeSpan structure.
     */
    public function getMilliseconds() {
        return (int) ($this->TotalMilliseconds - (int) ($this->TotalSeconds) * 1000);
    }

    //</editor-fold>
    //
    //<editor-fold desc="Minutes" defaultstate="collapsed">

    /**
     * Gets the minutes component of the time interval represented by the current TimeSpan structure.
     */
    public function getMinutes() {
        return (int) ($this->TotalMinutes - (int) ($this->TotalHours) * 60);
    }

    //</editor-fold>
    //
    //<editor-fold desc="Seconds" defaultstate="collapsed">

    /**
     * Gets the seconds component of the time interval represented by the current TimeSpan structure.
     */
    public function getSeconds() {
        return (int) ($this->TotalSeconds - (int) ($this->TotalMinutes) * 60);
    }

    //</editor-fold>
    //
    //<editor-fold desc="Ticks" defaultstate="collapsed">

    /**
     * Gets the number of ticks that represent the value of the current TimeSpan structure.
     */
    public function getTicks() {
        return $this->ticks;
    }

    //</editor-fold>
    //
    //<editor-fold desc="TotalDays" defaultstate="collapsed">

    /**
     * Gets the value of the current TimeSpan structure expressed in whole and fractional days.
     */
    public function getTotalDays() {
        return $this->ticks / System_TimeSpan::TicksPerDay;
    }

    //</editor-fold>
    //
    //<editor-fold desc="TotalHours" defaultstate="collapsed">

    /**
     * Gets the value of the current TimeSpan structure expressed in whole and fractional hours.
     */
    public function getTotalHours() {
        return $this->ticks / System_TimeSpan::TicksPerHour;
    }

    //</editor-fold>
    //
    //<editor-fold desc="TotalMilliseconds" defaultstate="collapsed">

    /**
     * Gets the value of the current TimeSpan structure expressed in whole and fractional milliseconds.
     */
    public function getTotalMilliseconds() {
        return $this->ticks / System_TimeSpan::TicksPerMillisecond;
    }

    //</editor-fold>
    //
    //<editor-fold desc="TotalMinutes" defaultstate="collapsed">

    /**
     * Gets the value of the current TimeSpan structure expressed in whole and fractional minutes.
     */
    public function getTotalMinutes() {
        return $this->ticks / System_TimeSpan::TicksPerMinute;
    }

    //</editor-fold>
    //
    //<editor-fold desc="TotalSeconds" defaultstate="collapsed">

    /**
     * Gets the value of the current TimeSpan structure expressed in whole and fractional seconds.
     */
    public function getTotalSeconds() {
        return $this->ticks / System_TimeSpan::TicksPerSecond;
    }

    //</editor-fold>
    //
    //</editor-fold>
    //
    //<editor-fold desc="Methods" defaultstate="collapsed">
    //
    //<editor-fold desc="Add" defaultstate="collapsed">

    /**
     * Returns a new TimeSpan object whose value is the sum of the specified TimeSpan object and this instance.
     * @param System_TimeSpan $ts The time interval to add.
     * @throws System_OverflowException The resulting TimeSpan is less than TimeSpan.MinValue or greater than TimeSpan.MaxValue.
     * @return System_TimeSpan A new object that represents the value of this instance plus the value of ts.
     */
    public function Add(System_TimeSpan $ts) {
        return new System_TimeSpan($this->Ticks + $ts->Ticks);
    }

    //</editor-fold>
    //
    //<editor-fold desc="Compare" defaultstate="collapsed">
    // Compares two TimeSpan values and returns an integer that indicates whether the first value is shorter than, equal to, or longer than the second value.
    //</editor-fold>
    //
    //<editor-fold desc="CompareTo" defaultstate="collapsed">
    // CompareTo(TimeSpan)	Compares this instance to a specified TimeSpan object and returns an integer that indicates whether this instance is shorter than, equal to, or longer than the TimeSpan object.
    //</editor-fold>
    //
    //<editor-fold desc="Duration" defaultstate="collapsed">

    /**
     * Returns a new TimeSpan object whose value is the absolute value of the current TimeSpan object.
     * @throws System_OverflowException The value of this instance is TimeSpan.MinValue.
     * @return System_TimeSpan A new object whose value is the absolute value of the current TimeSpan object.
     */
    public function Duration() {
        return new System_TimeSpan(abs($this->Ticks));
    }

    //</editor-fold>
    //
    //<editor-fold desc="Equals" defaultstate="collapsed">
    // Equals(Object)	Returns a value indicating whether this instance is equal to a specified object. (Overrides ValueType.Equals(Object).)
    // Equals(TimeSpan)	Returns a value indicating whether this instance is equal to a specified TimeSpan object.
    // Equals(TimeSpan, TimeSpan)	Returns a value that indicates whether two specified instances of TimeSpan are equal.
    //</editor-fold>
    //
    //<editor-fold desc="Finalize" defaultstate="collapsed">
    // Allows an object to try to free resources and perform other cleanup operations before it is reclaimed by garbage collection. (Inherited from Object.)
    //</editor-fold>
    //
    //<editor-fold desc="FromDays" defaultstate="collapsed">

    /**
     * Returns a TimeSpan that represents a specified number of days, where the specification is accurate to the nearest millisecond.
     * @param System_Double $value A number of days, accurate to the nearest millisecond.
     * @throws System_OverflowException value is less than MinValue or greater than MaxValue. -or- value is Double.PositiveInfinity. -or- value is Double.NegativeInfinity.
     * @throws System_ArgumentException	value is equal to Double.NaN.
     * @return System_TimeSpan An object that represents value.
     */
    public static function FromDays($value) {
        return new System_TimeSpan($value, 0, 0, 0, 0);
    }

    //</editor-fold>
    //
    //<editor-fold desc="FromHours" defaultstate="collapsed">

    /**
     * Returns a TimeSpan that represents a specified number of hours, where the specification is accurate to the nearest millisecond.
     * @param System_Double $value A number of hours accurate to the nearest millisecond.
     * @throws System_OverflowException value is less than MinValue or greater than MaxValue. -or- value is Double.PositiveInfinity. -or- value is Double.NegativeInfinity.
     * @throws System_ArgumentException	value is equal to Double.NaN.
     * @return System_TimeSpan An object that represents value.
     */
    public static function FromHours($value) {
        return new System_TimeSpan(0, $value, 0, 0, 0);
    }

    //</editor-fold>
    //
    //<editor-fold desc="FromMilliseconds" defaultstate="collapsed">

    /**
     * Returns a TimeSpan that represents a specified number of milliseconds.
     * @param System_Double $value A number of milliseconds.
     * @throws System_OverflowException value is less than MinValue or greater than MaxValue. -or- value is Double.PositiveInfinity. -or- value is Double.NegativeInfinity.
     * @throws System_ArgumentException	value is equal to Double.NaN.
     * @return System_TimeSpan An object that represents value.
     */
    public static function FromMilliseconds($value) {
        return new System_TimeSpan(0, 0, 0, 0, $value);
    }

    //</editor-fold>
    //
    //<editor-fold desc="FromMinutes" defaultstate="collapsed">

    /**
     * Returns a TimeSpan that represents a specified number of minutes, where the specification is accurate to the nearest millisecond.
     * @param System_Double $value A number of minutes, accurate to the nearest millisecond.
     * @throws System_OverflowException value is less than MinValue or greater than MaxValue. -or- value is Double.PositiveInfinity. -or- value is Double.NegativeInfinity.
     * @throws System_ArgumentException	value is equal to Double.NaN.
     * @return System_TimeSpan An object that represents value.
     */
    public static function FromMinutes($value) {
        return new System_TimeSpan(0, 0, $value, 0, 0);
    }

    //</editor-fold>
    //
    //<editor-fold desc="FromSeconds" defaultstate="collapsed">

    /**
     * Returns a TimeSpan that represents a specified number of seconds, where the specification is accurate to the nearest millisecond.
     * @param System_Double $value A number of seconds, accurate to the nearest millisecond.
     * @throws System_OverflowException value is less than MinValue or greater than MaxValue. -or- value is Double.PositiveInfinity. -or- value is Double.NegativeInfinity.
     * @throws System_ArgumentException	value is equal to Double.NaN.
     * @return System_TimeSpan An object that represents value.
     */
    public static function FromSeconds($value) {
        return new System_TimeSpan(0, 0, 0, $value, 0);
    }

    //</editor-fold>
    //
    //<editor-fold desc="FromTicks" defaultstate="collapsed">

    /**
     * Returns a TimeSpan that represents a specified time, where the specification is in units of ticks.
     * @param System_Int64 $value A number of ticks that represent a time.
     * @return System_TimeSpan An object that represents value.
     */
    public static function FromTicks($value) {
        return new System_TimeSpan($value);
    }

    //</editor-fold>
    //
    //<editor-fold desc="GetHashCode" defaultstate="collapsed">
    // Returns a hash code for this instance. (Overrides ValueType.GetHashCode().)
    //</editor-fold>
    //
    //<editor-fold desc="GetType" defaultstate="collapsed">
    //Gets the Type of the current instance. (Inherited from Object.)
    //</editor-fold>
    //
    //<editor-fold desc="MemberwiseClone" defaultstate="collapsed">
    // Creates a shallow copy of the current Object. (Inherited from Object.)
    //</editor-fold>
    //
    //<editor-fold desc="Negate" defaultstate="collapsed">

    /**
     * Returns a new TimeSpan object whose value is the negated value of this instance.
     * @throws System_OverflowException The negated value of this instance cannot be represented by a TimeSpan; that is, the value of this instance is MinValue.
     * @return System_TimeSpan A new object with the same numeric value as this instance, but with the opposite sign.
     */
    public function Negate() {
        return new System_TimeSpan(-$this->Ticks);
    }

    //</editor-fold>
    //
    //<editor-fold desc="Parse" defaultstate="collapsed">
    // Parse(String)	Converts the string representation of a time interval to its TimeSpan equivalent.
    //</editor-fold>
    //
    //<editor-fold desc="Subtract" defaultstate="collapsed">

    /**
     * Returns a new TimeSpan object whose value is the difference between the specified TimeSpan object and this instance.
     * @param System_TimeSpan $ts The time interval to be subtracted.
     * @throws System_OverflowException	The return value is less than TimeSpan.MinValue or greater than TimeSpan.MaxValue.
     * @return System_TimeSpan A new time interval whose value is the result of the value of this instance minus the value of ts.
     */
    public function Subtract(System_TimeSpan $ts) {
        return new System_TimeSpan($this->Ticks - $ts->Ticks);
    }

    //</editor-fold>
    //
    //<editor-fold desc="ToString" defaultstate="collapsed">
    // ()	Converts the value of the current TimeSpan object to its equivalent string representation. (Overrides ValueType.ToString().)
    public function ToString() {
        return sprintf('%s%02d:%02d:%02d.%07d', ($this->Days > 0 ? $this->Days . '.' : ''), $this->Hours, $this->Minutes, $this->Seconds, round(($this->TotalSeconds - (int) $this->TotalSeconds) * System_TimeSpan::TicksPerSecond));
    }

    //</editor-fold>
    //
    //<editor-fold desc="TryParse" defaultstate="collapsed">
    // (String, TimeSpan)	Converts the string representation of a time interval to its TimeSpan equivalent and returns a value that indicates whether the conversion succeeded.
    //</editor-fold>
    //
    //</editor-fold>
    //
    //<editor-fold desc="Fields" defaultstate="collapsed">

    /**
     * Represents the maximum TimeSpan value. This field is read-only.
     */

    const MaxValue = System_Int64::MaxValue;
    /**
     * Represents the minimum TimeSpan value. This field is read-only.
     */
    const MinValue = System_Int64::MinValue;
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