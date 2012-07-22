<?php

/**
 * The exception that is thrown when an arithmetic, casting, or conversion operation in a checked context results in an overflow.
 */
class System_OverflowException extends System_ArithmeticException {
    //
    //<editor-fold desc="Constructors" defaultstate="collapsed">

    /**
     * [0]
     * Initializes a new instance of the OverflowException class.
     * [1]
     * Initializes a new instance of the OverflowException class with a specified error message.
     * [2]
     * Initializes a new instance of the OverflowException class with a specified error message and a reference to the inner exception that is the cause of this exception.
     */
    public function System_OverflowException___cstor0() {
        parent::__construct('Arithmetic operation resulted in an overflow.');
    }

    //</editor-fold>
}

?>