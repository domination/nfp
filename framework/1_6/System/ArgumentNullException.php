<?php

/**
 * The exception that is thrown when a null reference (Nothing in Visual Basic) is passed to a method that does not accept it as a valid argument.
 */
class System_ArgumentNullException extends System_ArgumentException {
    //
    //<editor-fold desc="Constructors" defaultstate="collapsed">

    /**
     * [0]
     * Initializes a new instance of the ArgumentNullException class.
     * [1]
     * Initializes a new instance of the ArgumentNullException class with a specified error message.
     * [2]
     * Initializes a new instance of the ArgumentNullException class with a specified error message and a reference to the inner exception that is the cause of this exception.
     */
    public function System_ArgumentNullException___cstor0() {
        parent::__construct(null, 'Value cannot be null.');
    }

    //</editor-fold>
}

?>