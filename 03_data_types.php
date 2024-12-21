<?php
    /* PHP supports the following data types:
        String
        Integer
        Float (floating point numbers - also called double)
        Boolean
        Array
        Object
        NULL
        Resource
    */

    // The var_dump() function returns the data type and the value:

    $x = 5;
    var_dump($x);
    echo "<br>";


    // String

    /* A string can be any text inside quotes ()single or double quotes */

    $str1 = "Hello world!";
    $str2 = 'Hello world!';

    var_dump($str1);
    echo "<br>";
    var_dump($str2);
    echo "<br>";

    // PHP Integer
        /*
        An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.

            Rules for integers:
                An integer must have at least one digit
                An integer must not have a decimal point
                An integer can be either positive or negative
                Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation
        */

    // PHP Float
       /*
       A float (floating point number) is a number with a decimal point or a number in exponential form.
       */

    // PHP Boolean
        /* A Boolean represents two possible states: TRUE or FALSE.
        */

    
    $bol0 = true;
    var_dump($bol0);
    echo "<br>";

    // PHP Array
      /*
        An array stores multiple values in one single variable.
      */

    $cars = array("Volvo","BMW","Toyota");
    var_dump($cars);
    echo "<br>";
    echo "$cars[0] <br>";



    // PHP Object
        /*
        Classes and objects are the two main aspects of object-oriented programming.
        A class is a template for objects, and an object is an instance of a class.

        When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
        Let's assume we have a class named Car that can have properties like model, color, etc. We can define variables like $model, $color, and so on, to hold the values of these properties.

        When the individual objects (Volvo, BMW, Toyota, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.

        If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
        */
    class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {
            $this->color = $color;
            $this->model = $model;
        }
        public function message() {
            return "My car is a " . $this->color . " " . $this->model . "!";
        }
    }

    $myCar = new Car("red", "Volvo");
    var_dump($myCar);
    echo "<br>";



    // PHP NULL Value
      /* Null is a special data type which can have only one value: NULL.
        A variable of data type NULL is a variable that has no value assigned to it.
        Tip: If a variable is created without a value, it is automatically assigned a value of NULL.
     */

    $p = "Hello world!";
    $p = null;
    var_dump($p);
    echo "<br>";

   // Change Data Type

   $x = 10;
   $x = (string) $x;
   var_dump($x);
   echo "<br>";


?>