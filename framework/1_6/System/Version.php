<?php

/**
 * Represents the version number of an assembly, operating system, or the common language runtime. This class cannot be inherited.
 */
final class System_Version extends System_Object implements System_ICloneable, System_IComparable, System_IEquatable {
    //
    //<editor-fold desc="Constructors" defaultstate="collapsed">

    /**
     * Initializes a new instance of the Version class using the specified string.
     * @param System_String $major A string containing the major, minor, build, and revision numbers, where each number is delimited with a period character ('.').
     * @throws System_ArgumentException version has fewer than two components or more than four components.
     * @throws System_ArgumentNullException version is null.
     * @throws System_ArgumentOutOfRangeException A major, minor, build, or revision component is less than zero.
     * @throws System_FormatException At least one component of version does not parse to an integer.
     * @throws System_OverflowException At least one component of version represents a number greater than MaxValue.
     */
    public function System_Version___cstor1($version) {
        throw new System_NotImplementedException();

        $this->build = $build;
        $this->major = $major;
        $this->minor = $minor;
        $this->revision = $revision;
    }

    /**
     * Initializes a new instance of the Version class using the specified major and minor values.
     * @param System_Int32 $major The major version number.
     * @param System_Int32 $minor The minor version number.
     */
    public function System_Version___cstor2($major, $minor) {
        $this->System_Version___cstor4($major, $minor, null, null);
    }

    /**
     * Initializes a new instance of the Version class using the specified major, minor, and build values.
     * @param System_Int32 $major The major version number.
     * @param System_Int32 $minor The minor version number.
     * @param System_Int32 $build The build number.
     */
    public function System_Version___cstor3($major, $minor, $build) {
        $this->System_Version___cstor4($major, $minor, $build, null);
    }

    /**
     * Initializes a new instance of the Version class with the specified major, minor, build, and revision numbers.
     * @param System_Int32 $major The major version number.
     * @param System_Int32 $minor The minor version number.
     * @param System_Int32 $build The build number.
     * @param System_Int32 $revision The revision number.
     * @throws System_ArgumentOutOfRangeException
     */
    public function System_Version___cstor4($major, $minor, $build, $revision) {
        if ($major < 0 || $minor < 0) {
            throw new System_ArgumentOutOfRangeException();
        }
        if (!is_null($build)) {
            if ($build < 0) {
                throw new System_ArgumentOutOfRangeException('build');
            }
        }
        if (!is_null($revision)) {
            if ($revision < 0) {
                throw new System_ArgumentOutOfRangeException('revision');
            }
        }
        $this->major = $major;
        $this->minor = $minor;
        $this->build = $build;
        $this->revision = $revision;
    }

    //</editor-fold>
    //
    //<editor-fold desc="Properties" defaultstate="collapsed">
    //
    //<editor-fold desc="Build" defaultstate="collapsed">

    private $build;

    /**
     * Gets the value of the build component of the version number for the current Version object.
     * @return int 
     */
    public function getBuild() {
        return $this->build;
    }

    //</editor-fold>
    //
    //<editor-fold desc="Major" defaultstate="collapsed">

    private $major;

    /**
     * Gets the value of the major component of the version number for the current Version object.
     * @return int 
     */
    public function getMajor() {
        return $this->major;
    }

    //</editor-fold>
    //
    //<editor-fold desc="Minor" defaultstate="collapsed">

    private $minor;

    /**
     * Gets the value of the minor component of the version number for the current Version object.
     * @return int 
     */
    public function getMinor() {
        return $this->minor;
    }

    //</editor-fold>
    //
    //<editor-fold desc="Revision" defaultstate="collapsed">

    private $revision;

    /**
     * Gets the value of the revision component of the version number for the current Version object.
     * @return int 
     */
    public function getRevision() {
        return $this->revision;
    }

    //</editor-fold>
    //
    //</editor-fold>
    //
    //<editor-fold desc="Methods" defaultstate="collapsed">
    //
    //<editor-fold desc="CompareTo" defaultstate="collapsed">
    // CompareTo(Version)	Compares the current Version object to a specified Version object and returns an indication of their relative values.
    public function CompareTo___T($other) {
        throw new System_NotImplementedException();
    }

    //</editor-fold>
    //
    //<editor-fold desc="Equals" defaultstate="collapsed">
    //
    // Equals(Object)	Returns a value indicating whether the current Version object is equal to a specified object. (Overrides Object.Equals(Object).)
    // Equals(Version)	Returns a value indicating whether the current Version object and a specified Version object represent the same value.
    //
    public function Equals___T($other) {
        throw new System_NotImplementedException();
    }

    //</editor-fold>
    //
    //<editor-fold desc="Finalize" defaultstate="collapsed">
    // Allows an object to try to free resources and perform other cleanup operations before it is reclaimed by garbage collection. (Inherited from Object.)
    //</editor-fold>
    //
    //<editor-fold desc="GetHashCode" defaultstate="collapsed">
    // Returns a hash code for the current Version object. (Overrides Object.GetHashCode().)
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

    private function maxFieldCount() {
        $fieldCount = 4;
        if (is_null($this->Revision)) {
            $fieldCount = 3;
        }
        if (is_null($this->Build)) {
            $fieldCount = 2;
        }
        return $fieldCount;
    }

    /**
     * Converts the value of the current Version object to its equivalent String representation. (Overrides Object.ToString().)
     * @return System_String The String representation of the values of the major, minor, build, and revision components of the current Version object, as depicted in the following format. Each component is separated by a period character ('.'). Square brackets ('[' and ']') indicate a component that will not appear in the return value if the component is not defined: 
     * major.minor[.build[.revision]] 
     * For example, if you create a Version object using the constructor Version(1,1), the returned string is "1.1". If you create a Version object using the constructor Version(1,3,4,2), the returned string is "1.3.4.2".
     */
    public function ToString() {
        return $this->ToString___($this->maxFieldCount());
    }

    /**
     * Converts the value of the current Version object to its equivalent String representation. A specified count indicates the number of components to return.
     * @param System_Int32 $fieldCount The number of components to return. The fieldCount ranges from 0 to 4. 
     * @return System_String The String representation of the values of the major, minor, build, and revision components of the current Version object, each separated by a period character ('.'). The fieldCount parameter determines how many components are returned.
     * @throws System_ArgumentException
     */
    public function ToString___($fieldCount) {
        if ($fieldCount < 0 || $fieldCount > 4 || $fieldCount > $this->maxFieldCount()) {
            throw new System_ArgumentException();
        }

        $strVersion = '';
        if ($fieldCount > 0) {
            $strVersion .= $this->Major;
        }
        if ($fieldCount > 1) {
            $strVersion .= '.' . $this->Minor;
        }
        if ($fieldCount > 2) {
            $strVersion .= '.' . $this->Build;
        }
        if ($fieldCount > 3) {
            $strVersion .= '.' . $this->Revision;
        }
        return $strVersion;
    }

    //</editor-fold>
    //
    //</editor-fold>

    public function Clone___() {
        throw new System_NotImplementedException();
    }

}

?>