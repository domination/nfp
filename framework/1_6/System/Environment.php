<?php

/**
 * Provides information about, and means to manipulate, the current environment and platform. This class cannot be inherited.
 */
final class System_Environment extends System_Object {
    //
    //<editor-fold desc="Properties" defaultstate="collapsed">
    //
    //<editor-fold desc="HasShutdownStarted" defaultstate="collapsed">

    /**
     * Gets a value indicating whether the common language runtime (CLR) is shutting down.
     * @return System_boolean true if the CLR is shutting down; otherwise, false.
     */

    const HasShutdownStarted = false;
//    public static function getHasShutdownStarted() {
//        return false;
//    }
    //</editor-fold>
    //
    //<editor-fold desc="NewLine" defaultstate="collapsed">

    /**
     * Gets the newline string defined for this environment.
     * @return System_String A string containing "\r\n" for non-Unix platforms, or a string containing "\n" for Unix platforms.
     */
    const NewLine = "\n";

//    public static function getNewLine() {
//        return "\n";
//    }
    //</editor-fold>
    //
    //<editor-fold desc="TickCount" defaultstate="collapsed">

    /**
     * Gets the number of milliseconds elapsed since the system started.
     * @return System_Int32 A 32-bit signed integer containing the amount of time in milliseconds that has passed since the last time the computer was started.
     */
    public static function getTickCount() {
        $times = posix_times();
        return $times['ticks'];
    }

    //</editor-fold>
    //
    //<editor-fold desc="Version" defaultstate="collapsed">

    /**
     * Gets a Version object that describes the major, minor, build, and revision numbers of the common language runtime.
     * @return System_Version An object that displays the version of the common language runtime.
     */
    public static function getVersion() {
        return new System_Version(1, 6);
    }

    //</editor-fold>
    //
    //</editor-fold>
}

?>