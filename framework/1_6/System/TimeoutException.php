<?php

/**
 * The exception that is thrown when the time allotted for a process or operation has expired.
 */
class System_TimeoutException extends System_SystemException {
    //
    //<editor-fold desc="Constructors" defaultstate="collapsed">

    /**
     * [0]
     * Initializes a new instance of the System_TimeoutException class.
     * [1]
     * Initializes a new instance of the System_TimeoutException class with a specified error message.
     * [2]
     * Initializes a new instance of the System_TimeoutException class with a specified error message and a reference to the inner exception that is the cause of this exception.
     */
    public function System_TimeoutException___cstor0() {
        parent::__construct('The operation has timed out.');
    }

    //</editor-fold>
}

?>