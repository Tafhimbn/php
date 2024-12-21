<?php
    $x = "John";
    echo "Hello $x <br>"; // single Quotes 
    echo 'Hello $x <br>'; // double Quotes 

    // String Length
        /* 
        The PHP strlen() function returns the length of a string.
        */

    echo strlen("Hello world!");
    echo"<br>";

    // Word Count
        /*
        The PHP str_word_count() function counts the number of words in a string.
        */

    echo str_word_count("Hello world!");
    echo"<br>";

    // Search For Text Within a String
          /*
          The PHP strpos() function searches for a specific text within a string. 
          If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.
          */
    
    echo strpos("Hello world!", "world");
    echo"<br>";


    //PHP - Modify Strings

        // Upper Case

        $x = "Hello World!";
        echo strtoupper($x);
        echo"<br>";

        // Lower Case

        $x = "Hello World!";
        echo strtolower($x);
        echo"<br>";

        // Replace String

        $x = "Hello World!";
        echo str_replace("World", "Dolly", $x);
        echo"<br>";

        //Reverse a String

        $x = "Hello World!";
        echo strrev($x);
        echo"<br>";

        // Remove Whitespace
        /* Whitespace is the space before and/or after the actual text, and very often you want to remove this space. The trim() removes any whitespace from the beginning or the end
        */

        $x = " Hello World! ";
        echo trim($x);
        echo"<br>";


        // Convert String into Array
            /*
            The PHP explode() function splits a string into an array. The first parameter of the explode() function represents the "separator". The "separator" specifies where to split the string.
            Note: The separator is required.
        */

        $x = "Hello World!";
        $y = explode(" ", $x);
        echo"<br>";

        //Use the print_r() function to display the result:
        print_r($y);
        echo"<br>";

        /*
        Result:
        Array ( [0] => Hello [1] => World! )
        */


   // String Concatenation
        /*
        To concatenate, or combine, two strings you can use the . operator:
        */

    $x = "Hello";
    $y = "World";
    $z1 = $x.$y;
    echo $z1;
    echo"<br>";

    $z2 = $x . " " . $y;
    echo $z2;
    echo"<br>";


    //An easier and better way is by using the power of double quotes.

    $x = "Hello";
    $y = "World";
    $z = "$x $y";
    echo $z;
    echo"<br>";

    // PHP - Slicing Strings
        // Slicing
            /* You can return a range of characters by using the substr() function. Specify the start index and the number of characters you want to return.
            Start the slice at index 6 and end the slice 5 positions later:
            */

        $x = "Hello World!";
        echo substr($x, 6, 5);
        echo"<br>";

        // Slice to the End
            /* By leaving out the length parameter, the range will go to the end. Start the slice at index 6 and go all the way to the end.
            */
        $x = "Hello World!";
        echo substr($x, 6);
        echo"<br>";

        // Slice From the End
            /*  Use negative indexes to start the slice from the end of the string. Get the 3 characters, starting from the "o" in world (index -5):
            */

        $x = "Hello World!";
        echo substr($x, -5, 3);
        echo"<br>";
        
        // Negative Length
            /* 
            Use negative length to specify how many characters to omit, starting from the end of the string. 
            From the string "Hi, how are you?", get the characters starting from index 5, and continue until you reach the 3. character from the end (index -3). 
            Should end up with "ow are y":
            */
        $x = "Hi, how are you?";
        echo substr($x, 5, -3);
        echo"<br>";

       // Escape Character
            /*
            To insert characters that are illegal in a string, use an escape character.

           Code	          Result	
            \'	       Single Quote	
            \"	       Double Quote	
            \$	       PHP variables	
            \n	         New Line	
            \r	       Carriage Return	
            \t	            Tab	
            \f	         Form Feed	
            \ooo	    Octal value	
            \xhh	      Hex value

            */
    
?>