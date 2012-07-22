<?php

/**
 * The exception that is thrown for errors in an arithmetic, casting, or conversion operation.
 */
class System_ArithmeticException extends System_SystemException {
    //
    //<editor-fold desc="Constructors" defaultstate="collapsed">

    /**
     * [0]
     * Initializes a new instance of the ArithmeticException class.
     * [1]
     * Initializes a new instance of the ArithmeticException class with a specified error message.
     * [2]
     * Initializes a new instance of the ArithmeticException class with a specified error message and a reference to the inner exception that is the cause of this exception.
     */
    public function System_ArithmeticException___cstor0() {
        parent::__construct('Overflow or underflow in the arithmetic operation.');
    }

    //</editor-fold>
}

?>