<?php

/**
 * The exception that is thrown for invalid casting or explicit conversion.
 */
class System_InvalidCastException extends System_SystemException {
    //
    //<editor-fold desc="Constructors" defaultstate="collapsed">

    /**
     * [0]
     * Initializes a new instance of the System_InvalidCastException class.
     * [1]
     * Initializes a new instance of the System_InvalidCastException class with a specified error message.
     * [2]
     * Initializes a new instance of the System_InvalidCastException class with a specified error message and a reference to the inner exception that is the cause of this exception.
     */
    public function System_InvalidCastException___cstor0() {
        parent::__construct('Specified cast is not valid.');
    }

    //</editor-fold>
}

?>