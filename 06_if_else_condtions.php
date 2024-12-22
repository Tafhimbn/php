<?php
// if Statement
    /* Syntax:
            if (condition) {
            // code to be executed if condition is true;
            }
    */

    if (5 > 3) {
    echo "Have a good day! <br>";
    }

//  if...else Statement
    /* Syntax:
        if (condition) {
        // code to be executed if condition is true;
        } else {
        // code to be executed if condition is false;
        }
    */

    $t = date("H"); // Prints the day; H - 24-hour format of an hour (00 to 23)

    if ($t < "2") {
    echo "Have a good day!";
    } else {
    echo "Have a good night!";
    }
    echo "<br>";

    //  if...elseif...else Statement
    /*
        Syntax:
        if (condition) {
        code to be executed if this condition is true;
        } elseif (condition) {
        // code to be executed if first condition is false and this condition is true;
        } else {
        // code to be executed if all conditions are false;
        }
    */
    //Output "Have a good morning!" if the current time is less than 10, and "Have a good day!" if the current time is less than 20. Otherwise it will output "Have a good night!":

    $t = date("H");

    if ($t < "10") {
    echo "Have a good morning!";
    } elseif ($t < "20") {
    echo "Have a good day!";
    } else {
    echo "Have a good night!";
    }
    echo "<br>";

   // Short Hand If
    //To write shorter code, you can write if statements on one line.

    $a = 5;
    if ($a < 10) $b = "Hello";
    echo $b;
    echo "<br>";


    // Short Hand If...Else
        //if...else statements can also be written in one line, but the syntax is a bit different.

    $a = 13;
    $b = $a < 10 ? "Hello" : "Good Bye";
    echo $b;
    echo "<br>";


   // Nested If
    
   $a = 13;
    if ($a > 10) {
    echo "Above 10";
    if ($a > 20) {
        echo " and also above 20";
    } else {
        echo " but not above 20";
    }
    }
    echo "<br>";

    
?>