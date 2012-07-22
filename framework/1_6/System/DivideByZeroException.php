<?php

/**
 * The exception that is thrown when there is an attempt to divide an integral or decimal value by zero.
 */
class System_DivideByZeroException extends System_ArithmeticException {
    //
    //<editor-fold desc="Constructors" defaultstate="collapsed">

    /**
     * [0]
     * Initializes a new instance of the DivideByZeroException class.
     * [1]
     * Initializes a new instance of the DivideByZeroException class with a specified error message.
     * [2]
     * Initializes a new instance of the DivideByZeroException class with a specified error message and a reference to the inner exception that is the cause of this exception.
     */
    public function System_DivideByZeroException___cstor0() {
        parent::__construct('Attempted to divide by zero.');
    }

    //</editor-fold>
}

?>