<?php

/**
 * Controls the system garbage collector, a service that automatically reclaims unused memory.
 */
final class System_GC extends System_Object {
    //<editor-fold desc="Methods" defaultstate="collapsed">
    //
    //<editor-fold desc="KeepAlive" defaultstate="collapsed">

    /**
     * References the specified object, which makes it ineligible for garbage collection from the start of the current routine to the point where this method is called.
     * @param System_Object $obj The object to reference. 
     */
    public static function KeepAlive(System_Object $obj) {
        //TODO
    }

    //</editor-fold>
    //
    //<editor-fold desc="ReRegisterForFinalize" defaultstate="collapsed">

    /**
     * Requests that the system call the finalizer for the specified object for which SuppressFinalize has previously been called.
     * @param System_Object $obj The object that a finalizer must be called for. 
     * @throws System_ArgumentNullException 
     */
    public static function ReRegisterForFinalize(System_Object $obj) {
        if (is_null($obj)) {
            throw new System_ArgumentNullException();
        }
        //TODO
    }

    //</editor-fold>
    //
    //<editor-fold desc="SuppressFinalize" defaultstate="collapsed">

    /**
     * Requests that the system not call the finalizer for the specified object.
     * @param System_Object $obj The object that a finalizer must not be called for.
     * @throws System_ArgumentNullException 
     */
    public static function SuppressFinalize(System_Object $obj) {
        if (is_null($obj)) {
            throw new System_ArgumentNullException();
        }
        //TODO
    }

    //</editor-fold>
    //
    //
    //</editor-fold>
}

?>