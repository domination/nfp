<?php

/**
 * The exception that is thrown when the file image of a dynamic link library (DLL) or an executable program is invalid.
 */
class System_BadImageFormatException extends System_SystemException {
    //
    //<editor-fold desc="Constructors" defaultstate="collapsed">

    /**
     * [0]
     * Initializes a new instance of the System_BadImageFormatException class.
     * [1]
     * Initializes a new instance of the System_BadImageFormatException class with a specified error message.
     * [2]
     * Initializes a new instance of the System_BadImageFormatException class with a specified error message and a reference to the inner exception that is the cause of this exception.
     */
    public function System_BadImageFormatException___cstor0() {
        parent::__construct('Format of the executable (.exe) or library (.dll) is invalid.');
    }

    //</editor-fold>
}

?>