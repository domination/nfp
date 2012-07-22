<?php

/**
 * Defines the base class for predefined exceptions in the System namespace.
 */
class System_SystemException extends System_Exception {
    //
    //<editor-fold desc="Constructors" defaultstate="collapsed">

    /**
     * [0]
     * Initializes a new instance of the SystemException class.
     * [1]
     * Initializes a new instance of the SystemException class with a specified error message.
     * [2]
     * Initializes a new instance of the SystemException class with a specified error message and a reference to the inner exception that is the cause of this exception.
     */
    public function System_SystemException___cstor0() {
        parent::__construct('System error.');
    }

    //</editor-fold>
}

?>