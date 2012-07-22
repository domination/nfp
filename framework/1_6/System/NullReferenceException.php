<?php

/**
 * The exception that is thrown when there is an attempt to dereference a null object reference.
 */
class System_NullReferenceException extends System_SystemException {
    //
    //<editor-fold desc="Constructors" defaultstate="collapsed">

    /**
     * [0]
     * Initializes a new instance of the System_NullReferenceException class.
     * [1]
     * Initializes a new instance of the System_NullReferenceException class with a specified error message.
     * [2]
     * Initializes a new instance of the System_NullReferenceException class with a specified error message and a reference to the inner exception that is the cause of this exception.
     */
    public function System_NullReferenceException___cstor0() {
        parent::__construct('Object reference not set to an instance of an object.');
    }

    //</editor-fold>
}

?>