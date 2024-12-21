<?php
  // Creating (Declaring) PHP Variables
           /* In PHP, a variable starts with the $ sign
              A variable name cannot start with a number
              Variable names are case-sensitive ($age and $AGE are two different variables)
           */
  $x = 5;
  $y = "John";


  // Output Variables
         /* The PHP echo statement is often used to output data to the screen.
         */

   $nam = "Tafhim";
     echo "I am $nam. <br>";  // <br> tag used for html pursing



    /*
    PHP has three different variable scopes:
        local
        global
        static
    */

    // Variable with global scope:

    $a = 5; // global scope

    function globalTest() {   // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $a</p>";
    }
    globalTest();

    echo "<p>Variable x outside function is: $a</p>";

    
    //Variable with local scope:

    function localTest() {
      $b = 5; // local scope
      echo "<p>Variable x inside function is: $b</p>";
    }
    localTest();
    
    // using x outside the function will generate an error
    echo "<p>Variable x outside function is: $b</p>";



    // PHP The global Keyword
          /*
          The global keyword is used to access a global variable from within a function.
          To do this, use the global keyword before the variables (inside the function):
          */
    
    $c = 5;
    $d = 10;

    function globalKey() {
    global $c, $d;
    $d = $c + $d;
    }

    globalKey();
    echo $d; // outputs 15



   // PHP The static Keyword
        /*
        Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
        To do this, use the static keyword when you first declare the variable:
        */

    function static_key() {
    static $n = 0;
    echo "$n <br>";
    $n++;
    }

    static_key();
    static_key();
    static_key();

?>