<?php

/**
 * Defines a generalized type-specific comparison method that a value type or class implements to order or sort its instances.
 * 
 * Defines a generalized comparison method that a value type or class implements to create a type-specific comparison method for ordering instances.
 * 
 */
interface System_IComparable {

    /**
     * Compares the current object with another object of the same type.
     * @param T $other An object to compare with this object.
     * @return System_Int32 A value that indicates the relative order of the objects being compared. The return value has the following meanings: 
     *         Less than zero    This object is less than the other parameter.
     *         Zero              This object is equal to other.
     *         Greater than zero This object is greater than other.
     */
    public function CompareTo___T($other);
}

?>