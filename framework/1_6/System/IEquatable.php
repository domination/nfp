<?php

/**
 * Defines a generalized method that a value type or class implements to create a type-specific method for determining equality of instances.
 */
interface System_IEquatable {

    /**
     * Indicates whether the current object is equal to another object of the same type.
     * @param T $other An object to compare with this object. 
     * @return System_Boolean true if the current object is equal to the other parameter; otherwise, false.
     */
    public function Equals___T($other);
}

?>