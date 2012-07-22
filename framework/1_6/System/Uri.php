<?php

/**
 * Provides an object representation of a uniform resource identifier (URI) and easy access to the parts of the URI.
 */
class System_Uri extends System_Object {
    //
    //ISerializable
    //////////
    //<editor-fold desc="Constructors" defaultstate="collapsed">
    //
    // Uri(String)	Initializes a new instance of the Uri class with the specified URI.
    // Uri(String, UriKind)	Initializes a new instance of the Uri class with the specified URI. This constructor allows you to specify if the URI string is a relative URI, absolute URI, or is indeterminate.
    // Uri(Uri, String)	Initializes a new instance of the Uri class based on the specified base URI and relative URI string.
    // Uri(Uri, Uri)	Initializes a new instance of the Uri class based on the combination of a specified base Uri instance and a relative Uri instance.
    //          
    //</editor-fold>
    //<editor-fold desc="Properties" defaultstate="collapsed">
    //
    // AbsolutePath	Gets the absolute path of the URI.
    // AbsoluteUri	Gets the absolute URI.
    // DnsSafeHost	Gets an unescaped host name that is safe to use for DNS resolution.
    // Fragment	Gets the escaped URI fragment.
    // Host	Gets the host component of this instance.
    // IsAbsoluteUri	Gets whether the Uri instance is absolute.
    // IsUnc	Gets whether the specified Uri is a universal naming convention (UNC) path.
    // LocalPath	Gets a local operating-system representation of a file name.
    // OriginalString	Gets the original URI string that was passed to the Uri constructor.
    // Port	Gets the port number of this URI.
    // Query	Gets any query information included in the specified URI.
    // Scheme	Gets the scheme name for this URI.
    // UserEscaped	Indicates that the URI string was completely escaped before the Uri instance was created.
    // UserInfo	Gets the user name, password, or other user-specific information associated with the specified URI.
    // 
    //</editor-fold>
    //<editor-fold desc="Methods" defaultstate="collapsed">
    //
    // CheckSchemeName	Determines whether the specified scheme name is valid.
    // Compare	Compares the specified parts of two URIs using the specified comparison rules.
    // Equals	Compares two Uri instances for equality. (Overrides Object.Equals(Object).)
    // EscapeDataString	Converts a string to its escaped representation.
    // EscapeUriString	Converts a URI string to its escaped representation.
    // Finalize	Allows an object to try to free resources and perform other cleanup operations before it is reclaimed by garbage collection. (Inherited from Object.)
    // FromHex	Gets the decimal value of a hexadecimal digit.
    // GetComponents	Gets the specified components of the current instance using the specified escaping for special characters.
    // GetHashCode	Gets the hash code for the URI. (Overrides Object.GetHashCode().)
    // GetType	Gets the Type of the current instance. (Inherited from Object.)
    // IsBaseOf	Determines whether the current Uri instance is a base of the specified Uri instance.
    // IsHexDigit	Determines whether a specified character is a valid hexadecimal digit.
    // IsWellFormedUriString	Indicates whether the string is well-formed by attempting to construct a URI with the string and ensures that the string does not require further escaping.
    // MakeRelativeUri	Determines the difference between two Uri instances.
    // MemberwiseClone	Creates a shallow copy of the current Object. (Inherited from Object.)
    // ToString	Gets a canonical string representation for the specified Uri instance. (Overrides Object.ToString().)
    // TryCreate(String, UriKind, Uri)	Creates a new Uri using the specified String instance and a UriKind.
    // TryCreate(Uri, String, Uri)	Creates a new Uri using the specified base and relative String instances.
    // TryCreate(Uri, Uri, Uri)	Creates a new Uri using the specified base and relative Uri instances.
    // UnescapeDataString	Converts a string to its unescaped representation.
    // 
    //</editor-fold>
}

?>