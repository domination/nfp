<?php

/**
 * The exception that is thrown when a feature does not run on a particular platform.
 */
class System_PlatformNotSupportedException extends System_NotSupportedException {
    //
    //<editor-fold desc="Constructors" defaultstate="collapsed">

    /**
     * [0]
     * Initializes a new instance of the System_PlatformNotSupportedException class.
     * [1]
     * Initializes a new instance of the System_PlatformNotSupportedException class with a specified error message.
     * [2]
     * Initializes a new instance of the System_PlatformNotSupportedException class with a specified error message and a reference to the inner exception that is the cause of this exception.
     */
    public function System_PlatformNotSupportedException___cstor0() {
        parent::__construct('Operation is not supported on this platform.');
    }

    //</editor-fold>
}

?>