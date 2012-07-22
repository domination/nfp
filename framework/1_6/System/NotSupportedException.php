<?php

/**
 * The exception that is thrown when an invoked method is not supported, or when there is an attempt to read, seek, or write to a stream that does not support the invoked functionality.
 */
class System_NotSupportedException extends System_SystemException {
    //
    //<editor-fold desc="Constructors" defaultstate="collapsed">

    /**
     * [0]
     * Initializes a new instance of the System_NotSupportedException class.
     * [1]
     * Initializes a new instance of the System_NotSupportedException class with a specified error message.
     * [2]
     * Initializes a new instance of the System_NotSupportedException class with a specified error message and a reference to the inner exception that is the cause of this exception.
     */
    public function System_NotSupportedException___cstor0() {
        parent::__construct('Specified method is not supported.');
    }

    //</editor-fold>
}

?>