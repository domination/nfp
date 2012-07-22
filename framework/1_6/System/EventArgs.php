<?php

/**
 * EventArgs is the base class for classes containing event data.
 */
class System_EventArgs extends System_Object {
    //<editor-fold desc="Constructors" defaultstate="collapsed">
    //
    // EventArgs	Initializes a new instance of the EventArgs class.
    // 
    //</editor-fold>
    //
    //<editor-fold desc="Methods" defaultstate="collapsed">
    //
    //<editor-fold desc="Equals" defaultstate="collapsed">
    // Determines whether the specified Object is equal to the current Object. (Inherited from Object.)
    //</editor-fold>
    //
    //<editor-fold desc="Finalize" defaultstate="collapsed">
    // Allows an object to try to free resources and perform other cleanup operations before it is reclaimed by garbage collection. (Inherited from Object.)
    //</editor-fold>
    //
    //<editor-fold desc="GetHashCode" defaultstate="collapsed">
    // Serves as a hash function for a particular type. (Inherited from Object.)
    //</editor-fold>
    //
    //<editor-fold desc="GetType" defaultstate="collapsed">
    // Gets the Type of the current instance. (Inherited from Object.)
    //</editor-fold>
    //
    //<editor-fold desc="MemberwiseClone" defaultstate="collapsed">
    // Creates a shallow copy of the current Object. (Inherited from Object.)
    //</editor-fold>
    //
    //<editor-fold desc="ToString" defaultstate="collapsed">
    // Returns a string that represents the current object. (Inherited from Object.)
    //</editor-fold>
    // 
    //</editor-fold>
    //
    //<editor-fold desc="Fields" defaultstate="collapsed">
    //
    //<editor-fold desc="Empty" defaultstate="collapsed">

    /**
     * Represents an event with no event data.
     */
    public static $Empty = null;

    //</editor-fold>
    //
    //</editor-fold>

    public static function __init_static() {
        self::$Empty = new System_EventArgs();
    }

}

?>