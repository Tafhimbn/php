<?php
    // Array
       /*
       syntax:
          i. array() Function:
                     $array_name = array (...variables);  
                         // Variables can be strings and numbers (int, float), but array items can also be objects, functions or even arrays.

         ii. Using Square Brackets [] ; known as JSON notation.
                     $array_name = [...variables];

       There are three types of arrays:
            i. Indexed arrays -> Arrays with a numeric index
           ii. Associative arrays -> Arrays with named keys
           ii. Multidimensional arrays -> Arrays containing one or more arrays

        */

// i. Indexed arrays -> Arrays with a numeric index

    function myFunction(){
        echo "This text comes from a function. <br>";
    }

    $myArray = array("Volvo", 15, ["apples", "bananas"], myFunction(),TRUE);

    // Displaying arrays
    var_dump($myArray);
    echo "<br>";

    // calling the function from the array item:
    $myArray[3];

    // Adding an element to the array
        /* 
        syntax:
            $array_name[] = new_element;
        */

    $myArray[] = 7.5;
    echo $myArray[5]."<br>";


    // Changing array elements
        /* 
        syntax:
            $array_name[index] = $new_element;
        */

    $myArray[5] = 9.5;
    echo $myArray[5];
    echo "<br>";

    // Removing array elements
    // To remove an element from an array, you use the unset() function.
    unset($myArray[5]);
    var_dump($myArray);
    echo "<br>";

    // Getting the size of an array
    // To get the number of elements in an array, you use the count() function.

    echo count($myArray);
    echo "<br>";

// ii. Associative arrays -> Arrays with named keys

    $scores_1 = array();
    $scores_2 = [];

    $scores_1['Math'] = 85;
    $scores_2['Physics'] = 91;


    var_dump($scores_1);
    echo "<br>";
    var_dump($scores_2);
    echo "<br>";


    // PHP foreach
        // PHP foreach with indexed arrays
        /*
            Syntax:
                    foreach ($array_name as $element) {
                        // process element here
                    }
    */
    $colors = ['red', 'green', 'blue'];

    foreach ($colors as $color) {
        echo $color . '<br>';
    }

        // PHP foreach with indexed arrays
        /*
            Syntax:
                foreach ($array_name as $key => $value) {
                //process element here;
                }
    */

    $capitals = [
        'Japan' => 'Tokyo',
        'France' => 'Paris',
        'Germany' => 'Berlin',
        'United Kingdom' => 'London',
        'United States' => 'Washington D.C.'
    ];

    foreach ($capitals as $country => $capital) {
        echo "The capital city of {$country} is $capital" . '<br>';
    }


// iii. Multidimensional Array

    $cars = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Toyota",5,2),
        array("Land Rover",17,15)
    );

    var_dump($cars);
    echo '<br>';

    $todo_list = [
        ['Learn PHP programming', 2],
        ['Practice PHP', 2],
        ['Work', 8],
        ['Do exercise', 1],
    ];
    
    var_dump($todo_list);
    echo '<br>';
    echo $todo_list[1][1].'<br>';

    // Adding elements to a PHP multidimensional array
       /*
       syntax:
               $array[] = [element1, element2, ...];
      */

    $todo_list[] = ['Build something matter in PHP', 2];
    
    var_dump($todo_list);
    echo '<br>';

    // Removing elements from a PHP multidimensional array
    
    unset($todo_list[2][1]);  // remove "8"
    var_dump($todo_list);
    echo '<br>';

    // Iterating over elements of a multidimensional array using foreach

    $todo_list[2][1]=9;  // add "9"
    var_dump($todo_list);
    echo '<br>';
    
?>