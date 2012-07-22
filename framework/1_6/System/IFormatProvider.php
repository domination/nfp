<?php

/**
 * Provides a mechanism for retrieving an object to control formatting.
 */
class System_IFormatProvider {

    /**
     * Returns an object that provides formatting services for the specified type.
     * @param System_Type $formatType An object that specifies the type of format object to return.
     * @return System_Object An instance of the object specified by formatType, if the IFormatProvider implementation can supply that type of object; otherwise, null.
     */
    public function GetFormat($formatType);
}

?>