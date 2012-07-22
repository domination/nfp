<?php

final class System_Math extends System_Object {
    //
    //<editor-fold desc="Methods" defaultstate="collapsed">
    // Abs(Decimal)	Returns the absolute value of a Decimal number.
    // Abs(Double)	Returns the absolute value of a double-precision floating-point number.
    // Abs(Int16)	Returns the absolute value of a 16-bit signed integer.
    // Abs(Int32)	Returns the absolute value of a 32-bit signed integer.
    // Abs(Int64)	Returns the absolute value of a 64-bit signed integer.
    // Abs(SByte)	Returns the absolute value of an 8-bit signed integer.
    // Abs(Single)	Returns the absolute value of a single-precision floating-point number.
    public static function Abs($value) {
        return abs($value);
    }

    /**
     * Returns the angle whose cosine is the specified number.
     * @param System_Double $value A number representing a cosine, where d must be greater than or equal to -1, but less than or equal to 1.
     * @return System_Double An angle, ?, measured in radians, such that 0 ? ? ? ? 
     * -or- 
     * NaN if d < -1 or d > 1 or d equals NaN. 
     */
    public static function Acos($value) {
        return acos($value);
    }

    /**
     * Returns the angle whose sine is the specified number.
     * @param System_Double $value A number representing a sine, where d must be greater than or equal to -1, but less than or equal to 1. 
     * @return System_Double An angle, ?, measured in radians, such that -?/2 ? ? ? ?/2 
     * -or- 
     * NaN if d < -1 or d > 1 or d equals NaN.
     */
    public static function Asin($value) {
        return asin($value);
    }

    /**
     * Returns the angle whose tangent is the specified number.
     * @param System_Double $value A number representing a tangent. 
     * @return System_Double An angle, ?, measured in radians, such that -?/2 ? ? ? ?/2.
     * -or- 
     * NaN if d equals NaN, -?/2 rounded to double precision (-1.5707963267949) if d equals NegativeInfinity, or ?/2 rounded to double precision (1.5707963267949) if d equals PositiveInfinity.
     */
    public static function Atan($value) {
        return atan($value);
    }

    /**
     * Returns the angle whose tangent is the quotient of two specified numbers.
     * @param System_Double $y The y coordinate of a point.
     * @param System_Double $x The x coordinate of a point.
     * @return System_Double An angle, ?, measured in radians, such that -? ? ? ? ?, and tan(?) = y / x, where (x, y) is a point in the Cartesian plane. Observe the following: 
     *    For (x, y) in quadrant 1, 0 < ? < ?/2.
     *    For (x, y) in quadrant 2, ?/2 < ? ? ?.
     *    For (x, y) in quadrant 3, -? < ? < -?/2.
     *    For (x, y) in quadrant 4, -?/2 < ? < 0.
     * For points on the boundaries of the quadrants, the return value is the following:
     *    If y is 0 and x is not negative, ? = 0.
     *    If y is 0 and x is negative, ? = ?.
     *    If y is positive and x is 0, ? = ?/2.
     *    If y is negative and x is 0, ? = -?/2.
     * If x or y is NaN, or if x and y are either PositiveInfinity or NegativeInfinity, the method returns NaN.
     */
    public static function Atan2($y, $x) {
        return atan2($y, $x);
    }

    /**
     * Returns the smallest integral value that is greater than or equal to the specified double-precision floating-point number.
     * @param System_Double $value A double-precision floating-point number. 
     * @return System_Double The smallest integral value that is greater than or equal to a. If a is equal to NaN, NegativeInfinity, or PositiveInfinity, that value is returned. Note that this method returns a Double instead of an integral type.
     */
    public static function Ceiling($value) {
        return ceil($value);
    }

    /**
     * Returns the cosine of the specified angle.
     * @param System_Double $value An angle, measured in radians. 
     * @return System_Double The cosine of d. If d is equal to NaN, NegativeInfinity, or PositiveInfinity, this method returns NaN.
     */
    public static function Cos($value) {
        return cos($value);
    }

    /**
     * Returns the hyperbolic cosine of the specified angle.
     * @param System_Double $value An angle, measured in radians. 
     * @return System_Double The hyperbolic cosine of value. If value is equal to NegativeInfinity or PositiveInfinity, PositiveInfinity is returned. If value is equal to NaN, NaN is returned.
     */
    public static function Cosh($value) {
        return cosh($value);
    }

    /**
     * Returns e raised to the specified power.
     * @param System_Double $value A number specifying a power. 
     * @return System_Double The number e raised to the power d. If d equals NaN or PositiveInfinity, that value is returned. If d equals NegativeInfinity, 0 is returned.
     */
    public static function Exp($value) {
        return exp($value);
    }

    /**
     * Returns the largest integer less than or equal to the specified double-precision floating-point number.
     * @param System_Double $value A double-precision floating-point number. 
     * @return System_Double The largest integer less than or equal to d. If d is equal to NaN, NegativeInfinity, or PositiveInfinity, that value is returned.
     */
    public static function Floor($value) {
        return floor($value);
    }

    /**
     * Returns the remainder resulting from the division of a specified number by another specified number.
     * @param System_Double $x A dividend. 
     * @param System_Double $y A divisor. 
     */
    public static function IEEERemainder($x, $y) {
        return $x - ($y * System_Math::Round($x / $y));
    }

    // Log(Double)	Returns the natural (base e) logarithm of a specified number.
    // Log(Double, Double)	Returns the logarithm of a specified number in a specified base.
    public static function Log($a, $newBase = null) {
        if (is_null($newBase)) {
            return log($a);
        }
        return log($a, $newBase);
    }

    /**
     * Returns the base 10 logarithm of a specified number.
     * @param System_Double $value A number whose logarithm is to be found. 
     * @return System_Double One of the values in the following table. 
     * Positive The base 10 log of d; that is, log 10 d.
     * Zero NegativeInfinity
     * Negative NaN
     * Equal to NaN NaN
     * Equal to PositiveInfinity PositiveInfinity
     */
    public static function Log10($value) {
        return log10($value);
    }

    // Max(Byte, Byte)	Returns the larger of two 8-bit unsigned integers.
    // Max(Decimal, Decimal)	Returns the larger of two decimal numbers.
    // Max(Double, Double)	Returns the larger of two double-precision floating-point numbers.
    // Max(Int16, Int16)	Returns the larger of two 16-bit signed integers.
    // Max(Int32, Int32)	Returns the larger of two 32-bit signed integers.
    // Max(Int64, Int64)	Returns the larger of two 64-bit signed integers.
    // Max(SByte, SByte)	Returns the larger of two 8-bit signed integers.
    // Max(Single, Single)	Returns the larger of two single-precision floating-point numbers.
    // Max(UInt16, UInt16)	Returns the larger of two 16-bit unsigned integers.
    // Max(UInt32, UInt32)	Returns the larger of two 32-bit unsigned integers.
    // Max(UInt64, UInt64)	Returns the larger of two 64-bit unsigned integers.
    public static function Max($val1, $val2) {
        return $val1 > $val2 ? $val1 : $val2;
    }

    // Min(Byte, Byte)	Returns the smaller of two 8-bit unsigned integers.
    // Min(Decimal, Decimal)	Returns the smaller of two decimal numbers.
    // Min(Double, Double)	Returns the smaller of two double-precision floating-point numbers.
    // Min(Int16, Int16)	Returns the smaller of two 16-bit signed integers.
    // Min(Int32, Int32)	Returns the smaller of two 32-bit signed integers.
    // Min(Int64, Int64)	Returns the smaller of two 64-bit signed integers.
    // Min(SByte, SByte)	Returns the smaller of two 8-bit signed integers.
    // Min(Single, Single)	Returns the smaller of two single-precision floating-point numbers.
    // Min(UInt16, UInt16)	Returns the smaller of two 16-bit unsigned integers.
    // Min(UInt32, UInt32)	Returns the smaller of two 32-bit unsigned integers.
    // Min(UInt64, UInt64)	Returns the smaller of two 64-bit unsigned integers.
    public static function Min($val1, $val2) {
        return $val1 < $val2 ? $val1 : $val2;
    }

    /**
     * Returns a specified number raised to the specified power.
     * @param System_Double $x A double-precision floating-point number to be raised to a power. 
     * @param System_Double $y A double-precision floating-point number that specifies a power. 
     * @return System_Double The number x raised to the power y.
     */
    public static function Pow($x, $y) {
        return pow($x, $y);
    }

    // Round(Decimal)	Rounds a decimal value to the nearest integral value.
    // Round(Double)	Rounds a double-precision floating-point value to the nearest integral value.
    // Round(Decimal, Int32)	Rounds a decimal value to a specified number of fractional digits.
    // Round(Double, Int32)	Rounds a double-precision floating-point value to a specified number of fractional digits.
    public static function Round($value, $decimals = 0) {
        return round($value, $decimals);
    }

    // Sign(Decimal)	Returns a value indicating the sign of a decimal number.
    // Sign(Double)	Returns a value indicating the sign of a double-precision floating-point number.
    // Sign(Int16)	Returns a value indicating the sign of a 16-bit signed integer.
    // Sign(Int32)	Returns a value indicating the sign of a 32-bit signed integer.
    // Sign(Int64)	Returns a value indicating the sign of a 64-bit signed integer.
    // Sign(SByte)	Returns a value indicating the sign of an 8-bit signed integer.
    // Sign(Single)	Returns a value indicating the sign of a single-precision floating-point number.
    public static function Sign($value) {
        return $value <= 0 ? ($value < 0 ? -1 : 0) : 1;
    }

    /**
     * Returns the sine of the specified angle.
     * @param System_Double $value An angle, measured in radians. 
     * @return System_Double The sine of a. If a is equal to NaN, NegativeInfinity, or PositiveInfinity, this method returns NaN.
     */
    public static function Sin($value) {
        return sin($value);
    }

    /**
     * Returns the hyperbolic sine of the specified angle.
     * @param System_Double $value An angle, measured in radians. 
     * @return System_Double The hyperbolic sine of value. If value is equal to NegativeInfinity, PositiveInfinity, or NaN, this method returns a Double equal to value.
     */
    public static function Sinh($value) {
        return sinh($value);
    }

    /**
     * Returns the square root of a specified number.
     * @param System_Double $d A number. 
     * @return System_Double One of the values in the following table.
     * Zero, or positive The positive square root of d.
     * Negative NaN
     * Equals NaN NaN
     * Equals PositiveInfinity PositiveInfinity
     */
    public static function Sqrt($d) {
        return sqrt($d);
    }

    /**
     * Returns the tangent of the specified angle.
     * @param System_Double $value An angle, measured in radians. 
     * @return System_Double The tangent of a. If a is equal to NaN, NegativeInfinity, or PositiveInfinity, this method returns NaN.
     */
    public static function Tan($value) {
        return tan($value);
    }

    /**
     * Returns the hyperbolic tangent of the specified angle.
     * @param System_Double $value An angle, measured in radians. 
     * @return System_Double The hyperbolic tangent of value. If value is equal to NegativeInfinity, this method returns -1. If value is equal to PositiveInfinity, this method returns 1. If value is equal to NaN, this method returns NaN.
     */
    public static function Tanh($value) {
        return tanh($value);
    }

    /**
     * Calculates the integral part of a specified double-precision floating-point number.
     * Truncate rounds d to the nearest integer towards zero.
     * @param System_Double $value A number to truncate.
     * @return System_Double A The integral part of d; that is, the number that remains after any fractional digits have been discarded, or one of the values listed in the following table. 
     * NaN NaN
     * NegativeInfinity NegativeInfinity
     * PositiveInfinity PositiveInfinity    
     */
    public static function Truncate($value) {
        return intval($value);
    }

    //</editor-fold>
    //<editor-fold desc="Fields" defaultstate="collapsed">

    /**
     * Represents the natural logarithmic base, specified by the constant, e.
     */

    const E = 2.7182818284590452354;

    /**
     * Represents the ratio of the circumference of a circle to its diameter, specified by the constant, ?.
     */
    const PI = 3.14159265358979323846; //M_PI

    //</editor-fold>
}

?>