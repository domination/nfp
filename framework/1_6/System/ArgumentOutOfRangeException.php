<?php

/**
 * The exception that is thrown when the value of an argument is outside the allowable range of values as defined by the invoked method.
 */
class System_ArgumentOutOfRangeException extends System_ArgumentException {
    //
    //<editor-fold desc="Constructors" defaultstate="collapsed">

    /**
     * [0]
     * Initializes a new instance of the System_ArgumentOutOfRangeException class.
     * [1]
     * Initializes a new instance of the System_ArgumentOutOfRangeException class with a specified error message.
     * [2]
     * Initializes a new instance of the System_ArgumentOutOfRangeException class with a specified error message and a reference to the inner exception that is the cause of this exception.
     */
    public function System_ArgumentOutOfRangeException___cstor0() {
        parent::__construct(null, 'Specified argument was out of the range of valid values.');
    }

    //</editor-fold>
}

?>