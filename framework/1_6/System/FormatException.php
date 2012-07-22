<?php

/**
 * The exception that is thrown when the format of an argument does not meet the parameter specifications of the invoked method.
 */
class System_FormatException extends System_SystemException {
    //
    //<editor-fold desc="Constructors" defaultstate="collapsed">

    /**
     * [0]
     * Initializes a new instance of the System_FormatException class.
     * [1]
     * Initializes a new instance of the System_FormatException class with a specified error message.
     * [2]
     * Initializes a new instance of the System_FormatException class with a specified error message and a reference to the inner exception that is the cause of this exception.
     */
    public function System_FormatException___cstor0() {
        parent::__construct('One of the identified items was in an invalid format.');
    }

    //</editor-fold>
}

?>