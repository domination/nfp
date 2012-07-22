<?php

/**
 * The exception that is thrown when a requested method or operation is not implemented.
 */
class System_NotImplementedException extends System_SystemException {
    //
    //<editor-fold desc="Constructors" defaultstate="collapsed">

    /**
     * [0]
     * Initializes a new instance of the System_NotImplementedException class.
     * [1]
     * Initializes a new instance of the System_NotImplementedException class with a specified error message.
     * [2]
     * Initializes a new instance of the System_NotImplementedException class with a specified error message and a reference to the inner exception that is the cause of this exception.
     */
    public function System_NotImplementedException___cstor0() {
        parent::__construct('The method or operation is not implemented.');
    }

    //</editor-fold>
}

?>