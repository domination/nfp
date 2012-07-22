<?php

/**
 * Provides functionality to format the value of an object into a string representation. 
 */
interface System_IFormattable {

    /**
     * Formats the value of the current instance using the specified format.
     * @param string $format The format to use.
     * @param System_IFormatProvider $formatProvider The provider to use to format the value.
     * @return System_String The value of the current instance in the specified format.
     */
    public function ToString___($format, System_IFormatProvider $formatProvider);
}

?>