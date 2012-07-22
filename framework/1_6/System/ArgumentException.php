<?php

/**
 * The exception that is thrown when one of the arguments provided to a method is not valid.
 */
class System_ArgumentException extends System_SystemException {
    //
    //<editor-fold desc="Constructors" defaultstate="collapsed">

    /**
     * [0]
     * Initializes a new instance of the ArgumentException class.
     * [1]
     * Initializes a new instance of the ArgumentException class with a specified error message.
     * [2]
     * Initializes a new instance of the ArgumentException class with a specified error message and a reference to the inner exception that is the cause of this exception.
     */
    public function System_ArgumentException___cstor0() {
        parent::__construct('Value does not fall within the expected range.');
        $this->paramName = null;
    }

    /**
     * Initializes a new instance of the ArgumentException class with a specified error message and the name of the parameter that causes this exception.
     */
    public function System_ArgumentException___cstor1($paramName) {
        $this->System_Exception___cstor1('Value does not fall within the expected range.');
        $this->paramName = $paramName;
    }

    /**
     * Initializes a new instance of the ArgumentException class with a specified error message and the name of the parameter that causes this exception.
     */
    public function System_ArgumentException___cstor2($paramName, $message) {
        $this->System_Exception___cstor1($message);
        $this->paramName = $paramName;
    }

    //</editor-fold>
    //
    //<editor-fold desc="Properties" defaultstate="collapsed">
    //
    //<editor-fold desc="Message" defaultstate="collapsed">

    private $paramName;

    /**
     * Gets the error message and the parameter name, or only the error message if no parameter name is set. (Overrides Exception.Message.)
     * In XNA Framework 3.0, this member is inherited from Exception.Message.
     * In Portable Class Library Portable Class Library, this member is inherited from Exception.Message.
     * @return System_String A text string describing the details of the exception. The value of this property takes one of two forms: 
     * The paramName is a null reference (Nothing in Visual Basic) or of zero length.
     *     The message string passed to the constructor.
     * The paramName is not null reference (Nothing in Visual Basic) and it has a length greater than zero.
     *     The message string appended with the name of the invalid parameter.
     */
    public function get_Message() {
        if ($this->paramName != null) {
            return $this->message . "\r\nParameter name: " . $this->paramName;
        }
        return $this->message;
    }

    //</editor-fold>
    //
    //</editor-fold>
}

?>