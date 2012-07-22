<?php
//NOT IN BCL
/**
 * Represents the standard input, output, and error streams for console applications. This class cannot be inherited.
 */
final class System_Console extends System_Object {
    //<editor-fold desc="Properties" defaultstate="collapsed">
    //
    // BackgroundColor	Gets or sets the background color of the console.
    // BufferHeight	Gets or sets the height of the buffer area.
    // BufferWidth	Gets or sets the width of the buffer area.
    // CapsLock	Gets a value indicating whether the CAPS LOCK keyboard toggle is turned on or turned off.
    // CursorLeft	Gets or sets the column position of the cursor within the buffer area.
    // CursorSize	Gets or sets the height of the cursor within a character cell.
    // CursorTop	Gets or sets the row position of the cursor within the buffer area.
    // CursorVisible	Gets or sets a value indicating whether the cursor is visible.
    // Error	Gets the standard error output stream.
    // ForegroundColor	Gets or sets the foreground color of the console.
    // In	Gets the standard input stream.
    // InputEncoding	Gets or sets the encoding the console uses to read input.
    // KeyAvailable	Gets a value indicating whether a key press is available in the input stream.
    // LargestWindowHeight	Gets the largest possible number of console window rows, based on the current font and screen resolution.
    // LargestWindowWidth	Gets the largest possible number of console window columns, based on the current font and screen resolution.
    // NumberLock	Gets a value indicating whether the NUM LOCK keyboard toggle is turned on or turned off.
    // Out	Gets the standard output stream.
    // OutputEncoding	Gets or sets the encoding the console uses to write output.
    // Title	Gets or sets the title to display in the console title bar.
    // TreatControlCAsInput	Gets or sets a value indicating whether the combination of the Control modifier key and C console key (CTRL+C) is treated as ordinary input or as an interruption that is handled by the operating system.
    // WindowHeight	Gets or sets the height of the console window area.
    // WindowLeft	Gets or sets the leftmost position of the console window area relative to the screen buffer.
    // WindowTop	Gets or sets the top position of the console window area relative to the screen buffer.
    // WindowWidth	Gets or sets the width of the console window.
    // 
    //</editor-fold>
    //<editor-fold desc="Methods" defaultstate="collapsed">
    //
    // Beep()	Plays the sound of a beep through the console speaker.
    // Beep(Int32, Int32)	Plays the sound of a beep of a specified frequency and duration through the console speaker.
    // Clear	Clears the console buffer and corresponding console window of display information.
    // MoveBufferArea(Int32, Int32, Int32, Int32, Int32, Int32)	Copies a specified source area of the screen buffer to a specified destination area.
    // MoveBufferArea(Int32, Int32, Int32, Int32, Int32, Int32, Char, ConsoleColor, ConsoleColor)	Copies a specified source area of the screen buffer to a specified destination area.
    // OpenStandardError()	Acquires the standard error stream.
    // OpenStandardError(Int32)	Acquires the standard error stream, which is set to a specified buffer size.
    // OpenStandardInput()	Acquires the standard input stream.
    // OpenStandardInput(Int32)	Acquires the standard input stream, which is set to a specified buffer size.
    // OpenStandardOutput()	Acquires the standard output stream.
    // OpenStandardOutput(Int32)	Acquires the standard output stream, which is set to a specified buffer size.
    // Read	Reads the next character from the standard input stream.
    // ReadKey()	Obtains the next character or function key pressed by the user. The pressed key is displayed in the console window.
    // ReadKey(Boolean)	Obtains the next character or function key pressed by the user. The pressed key is optionally displayed in the console window.
    // ReadLine	Reads the next line of characters from the standard input stream.
    // ResetColor	Sets the foreground and background console colors to their defaults.
    // SetBufferSize	Sets the height and width of the screen buffer area to the specified values.
    // SetCursorPosition	Sets the position of the cursor.
    // SetError	Sets the Error property to the specified TextWriter object.
    // SetIn	Sets the In property to the specified TextReader object.
    // SetOut	Sets the Out property to the specified TextWriter object.
    // SetWindowPosition	Sets the position of the console window relative to the screen buffer.
    // SetWindowSize	Sets the height and width of the console window to the specified values.
    // Write(Boolean)	Writes the text representation of the specified Boolean value to the standard output stream.
    // Write(Char)	Writes the specified Unicode character value to the standard output stream.
    // Write(Char[])	Writes the specified array of Unicode characters to the standard output stream.
    // Write(Decimal)	Writes the text representation of the specified Decimal value to the standard output stream.
    // Write(Double)	Writes the text representation of the specified double-precision floating-point value to the standard output stream.
    // Write(Int32)	Writes the text representation of the specified 32-bit signed integer value to the standard output stream.
    // Write(Int64)	Writes the text representation of the specified 64-bit signed integer value to the standard output stream.
    // Write(Object)	Writes the text representation of the specified object to the standard output stream.
    // Write(Single)	Writes the text representation of the specified single-precision floating-point value to the standard output stream.
    // Write(String)	Writes the specified string value to the standard output stream.
    // Write(UInt32)	Writes the text representation of the specified 32-bit unsigned integer value to the standard output stream.
    // Write(UInt64)	Writes the text representation of the specified 64-bit unsigned integer value to the standard output stream.
    // Write(String, Object)	Writes the text representation of the specified object to the standard output stream using the specified format information.
    // Write(String, Object[])	Writes the text representation of the specified array of objects to the standard output stream using the specified format information.
    // Write(Char[], Int32, Int32)	Writes the specified subarray of Unicode characters to the standard output stream.
    // Write(String, Object, Object)	Writes the text representation of the specified objects to the standard output stream using the specified format information.
    // Write(String, Object, Object, Object)	Writes the text representation of the specified objects to the standard output stream using the specified format information.
    // Write(String, Object, Object, Object, Object)	Writes the text representation of the specified objects and variable-length parameter list to the standard output stream using the specified format information.
    // WriteLine()	Writes the current line terminator to the standard output stream.
    // WriteLine(Boolean)	Writes the text representation of the specified Boolean value, followed by the current line terminator, to the standard output stream.
    // WriteLine(Char)	Writes the specified Unicode character, followed by the current line terminator, value to the standard output stream.
    // WriteLine(Char[])	Writes the specified array of Unicode characters, followed by the current line terminator, to the standard output stream.
    // WriteLine(Decimal)	Writes the text representation of the specified Decimal value, followed by the current line terminator, to the standard output stream.
    // WriteLine(Double)	Writes the text representation of the specified double-precision floating-point value, followed by the current line terminator, to the standard output stream.
    // WriteLine(Int32)	Writes the text representation of the specified 32-bit signed integer value, followed by the current line terminator, to the standard output stream.
    // WriteLine(Int64)	Writes the text representation of the specified 64-bit signed integer value, followed by the current line terminator, to the standard output stream.
    // WriteLine(Object)	Writes the text representation of the specified object, followed by the current line terminator, to the standard output stream.
    // WriteLine(Single)	Writes the text representation of the specified single-precision floating-point value, followed by the current line terminator, to the standard output stream.
    // WriteLine(String)	Writes the specified string value, followed by the current line terminator, to the standard output stream.
    // WriteLine(UInt32)	Writes the text representation of the specified 32-bit unsigned integer value, followed by the current line terminator, to the standard output stream.
    // WriteLine(UInt64)	Writes the text representation of the specified 64-bit unsigned integer value, followed by the current line terminator, to the standard output stream.
    // WriteLine(String, Object)	Writes the text representation of the specified object, followed by the current line terminator, to the standard output stream using the specified format information.
    // WriteLine(String, Object[])	Writes the text representation of the specified array of objects, followed by the current line terminator, to the standard output stream using the specified format information.
    // WriteLine(Char[], Int32, Int32)	Writes the specified subarray of Unicode characters, followed by the current line terminator, to the standard output stream.
    // WriteLine(String, Object, Object)	Writes the text representation of the specified objects, followed by the current line terminator, to the standard output stream using the specified format information.
    // WriteLine(String, Object, Object, Object)	Writes the text representation of the specified objects, followed by the current line terminator, to the standard output stream using the specified format information.
    // WriteLine(String, Object, Object, Object, Object)	Writes the text representation of the specified objects and variable-length parameter list, followed by the current line terminator, to the standard output stream using the specified format information.
    //
    //</editor-fold>
}

?>