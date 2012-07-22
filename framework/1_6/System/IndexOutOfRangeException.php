<?php

/**
 * The exception that is thrown when an attempt is made to access an element of an array with an index that is outside the bounds of the array. This class cannot be inherited.
 */
class System_IndexOutOfRangeException extends System_SystemException {
    //
    //<editor-fold desc="Constructors" defaultstate="collapsed">

    /**
     * [0]
     * Initializes a new instance of the System_IndexOutOfRangeException class.
     * [1]
     * Initializes a new instance of the System_IndexOutOfRangeException class with a specified error message.
     * [2]
     * Initializes a new instance of the System_IndexOutOfRangeException class with a specified error message and a reference to the inner exception that is the cause of this exception.
     */
    public function System_IndexOutOfRangeException___cstor0() {
        parent::__construct('Index was outside the bounds of the array.');
    }

    //</editor-fold>
}

?>