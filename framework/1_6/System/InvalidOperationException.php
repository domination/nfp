<?php

/**
 * The exception that is thrown when a method call is invalid for the object's current state.
 */
class System_InvalidOperationException extends System_SystemException {
    //
    //<editor-fold desc="Constructors" defaultstate="collapsed">

    /**
     * [0]
     * Initializes a new instance of the System_InvalidOperationException class.
     * [1]
     * Initializes a new instance of the System_InvalidOperationException class with a specified error message.
     * [2]
     * Initializes a new instance of the System_InvalidOperationException class with a specified error message and a reference to the inner exception that is the cause of this exception.
     */
    public function System_InvalidOperationException___cstor0() {
        parent::__construct('Operation is not valid due to the current state of the object.');
    }

    //</editor-fold>
}

?>