<?php

/**
 * Represents a pseudo-random number generator, a device that produces a sequence of numbers that meet certain statistical requirements for randomness.
 */
class System_Random extends System_Object {
    //
    //<editor-fold desc="Constructors" defaultstate="collapsed">
    //
    
    /**
     * [0]
     * Initializes a new instance of the Random class, using a time-dependent default seed value.
     * [1]
     * Initializes a new instance of the Random class, using the specified seed value.
     * @param System_Int32 $Seed A number used to calculate a starting value for the pseudo-random number sequence. If a negative number is specified, the absolute value of the number is used. 
     */
    public function __construct($Seed = null) {
        parent::__construct();
        if (!is_null($Seed)) {
            mt_srand($Seed);
        }
    }

    // 
    //</editor-fold>
    //
    //<editor-fold desc="Methods" defaultstate="collapsed">
    //
    //<editor-fold desc="Equals" defaultstate="collapsed">
    // Determines whether the specified Object is equal to the current Object. (Inherited from Object.)
    //</editor-fold>
    //
    //<editor-fold desc="Finalize" defaultstate="collapsed">
    // Allows an object to try to free resources and perform other cleanup operations before it is reclaimed by garbage collection. (Inherited from Object.)
    //</editor-fold>
    //
    //<editor-fold desc="GetHashCode" defaultstate="collapsed">
    // Serves as a hash function for a particular type. (Inherited from Object.)
    //</editor-fold>
    //
    //<editor-fold desc="GetType" defaultstate="collapsed">
    // Gets the Type of the current instance. (Inherited from Object.)
    //</editor-fold>
    //
    //<editor-fold desc="MemberwiseClone" defaultstate="collapsed">
    // Creates a shallow copy of the current Object. (Inherited from Object.)
    //</editor-fold>
    //
    //<editor-fold desc="Next" defaultstate="collapsed">

    /**
     * [0]
     * Returns a nonnegative random number.
     * [1]
     * Returns a nonnegative random number less than the specified maximum.
     * @param System_Int32 $maxValue The exclusive upper bound of the random number to be generated. maxValue must be greater than or equal to zero.
     * @return System_Int32 A 32-bit signed integer greater than or equal to zero, and less than maxValue; that is, the range of return values ordinarily includes zero but not maxValue. However, if maxValue equals zero, maxValue is returned.
     * [2]
     * Returns a random number within a specified range.
     * @param System_Int32 $minValue The inclusive lower bound of the random number returned. 
     * @param System_Int32 $maxValue The exclusive upper bound of the random number returned. maxValue must be greater than or equal to minValue. 
     * @return System_Int32 A 32-bit signed integer greater than or equal to minValue and less than maxValue; that is, the range of return values includes minValue but not maxValue. If minValue equals maxValue, minValue is returned.
     */
    public function Next($minValue = null, $maxValue = null) {
        if (is_null($minValue)) {
            $minValue = 0;
            $maxValue = getrandmax(); //TODO System_Int32.MaxValue
        } elseif (is_null($maxValue)) {
            $maxValue = $minValue;
            $minValue = 0;
        }
        return rand($minValue, $maxValue);
    }

    //</editor-fold>
    //
    //<editor-fold desc="NextBytes" defaultstate="collapsed">

    /**
     * Fills the elements of a specified array of bytes with random numbers.
     * @param System_Byte[] $buffer An array of bytes to contain random numbers. 
     * @throws System_ArgumentNullException buffer is null.
     */
    public function NextBytes(&$buffer) {
        if (is_null($buffer)) {
            throw new System_ArgumentNullException();
        }
        $c = count($buffer);
        for ($i = 0; $i < $c; $i++) {
            $buffer[$i] = mt_rand(0, 255);
        }
    }

    // Fills the elements of a specified array of bytes with random numbers.
    //</editor-fold>
    //
    //<editor-fold desc="NextDouble" defaultstate="collapsed">

    /**
     * Returns a random number between 0.0 and 1.0.
     * @return System_Double A double-precision floating point number greater than or equal to 0.0, and less than 1.0.
     */
    public function NextDouble() {
        return mt_rand() / mt_getrandmax();
    }

    //</editor-fold>
    //
    //<editor-fold desc="Sample" defaultstate="collapsed">

    /**
     * Returns a random number between 0.0 and 1.0.
     * @return System_Double A double-precision floating point number greater than or equal to 0.0, and less than 1.0.
     */
    protected function Sample() {
        return rand() / getrandmax();
    }

    //</editor-fold>
    //
    //<editor-fold desc="ToString" defaultstate="collapsed">
    // Returns a string that represents the current object. (Inherited from Object.)
    //</editor-fold>
    //
    //</editor-fold>

    public static function __init_static() {
        //mt_srand(); with magic parameters
    }

}

?>