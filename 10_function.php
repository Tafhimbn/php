<?php
/* PHP Function 
   i. Built-in function 
       -> Array, Calendar, Date, Directory, Error, Exception, Filesystem, 
          Filter, FTP, JSON, Keywords, Libxml, Mail, Math, Misc, MySQLi, 
          Network, Output, RegEx, SimpleXML, Stream, String, Var, Handling, 
          XML, Parser, Zip, Timezones
 
  ii. User Defined Functions

  syntax:
  function function_name(input_variable_1,input_variable_2,...){
   // code block
  }

  function_name(input_value_1,input_value_2,...)

*/

function greeting($str1, $str2)
{
	return $str1 . $str2 . "!";
}

$name = "Tafhim";
$message = greeting('Hello ',$name);
echo "$message <br>";



function sum($x, $y) {
  $z = $x + $y;
  return $z;
}

echo "1 + 2 = " . sum(1, 2) . "<br>";
echo "3 + 4 = " . sum(3, 4) . "<br>";
echo "5 + 6 = " . sum(5, 6). "<br>";


// Default Argument Value

function weight_check($min_weight = 50) {
  echo "The Weight is : $min_weight <br>";
}

weight_check(350);
weight_check(); // will use the default value of 50
weight_check(135);
weight_check(80);


//Passing Arguments by Reference
  /*  When a function argument is passed by reference, changes to the argument also change the variable that was passed in. 
      To turn a function argument into a reference, the & operator is used.
  */

  function increment(&$value) {
    $value += 1;
  }
  
  $num = 5;
  increment($num);
  echo "$num <br>";



  // Named Arguments
     /*    
        The named arguments allow you to pass arguments to a function based on the parameter names rather than the parameter positions.
        PHP 8.0 introduced the named arguments that allow you to specify the parameter names when passing arguments.
     */


function greeting_message($into, $name)
{
	return $into . $name . "!";
}

$message = greeting_message(
  name :"Tafhim", 
  into : "Hello" );

echo "$message <br>";

// Combining Named Arguments with Positional Arguments
  /* PHP allows you to call a function by using both positional arguments and named arguments. 
  And you need to place the named arguments after positional arguments. 
 */

 function  info($name, $dept, $desig) {
  echo " $name, $desig-$dept <br>";
}

info("Tafhim", desig:"Executive", dept:"Engineering");


// Variable Number of Arguments
  /*  By using the ... operator in front of the function parameter, the function accepts an unknown number of arguments. 
      This is also called a variadic function. The variadic function argument becomes an array. 
      If a function has multiple parameters, only the last parameter can be variadic.

      syntax:
      function my_func($a, $b, ...$params) 
      {
        // ...
      }
  */
  function number_check($x, ...$numbers) {
    echo "First number: $x <br>";
    echo "Remaining numbers: ";
    foreach ($numbers as $n) {
       echo "$n  ";
    }
 }
 number_check(5, 12, 9, 23, 8, 41);

?>