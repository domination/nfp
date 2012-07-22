<?php

/**
 * Supports cloning, which creates a new instance of a class with the same value as an existing instance.
 */
interface System_ICloneable {
    
    /**
     * Creates a new object that is a copy of the current instance.
     * @return System_Object A new object that is a copy of this instance. 
     */
    public function Clone___();
}

?>