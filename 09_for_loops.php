<?php
// for Loop
    /* The for loop is used when you know how many times the script should run.

    Syntax:
    for (expression1, expression2, expression3) {
    // code block
    }

    */

for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}


// break Statement
   // With the break statement we can stop the loop even if the condition is still true:


for ($x = 0; $x <= 10; $x++) {
  if ($x == 3) break;
  echo "The number is: $x <br>";
}


// continue Statement
    // With the continue statement we can stop the current iteration, and continue with the next:

for ($x = 0; $x <= 10; $x++) {
  if ($x == 3) continue;
  echo "The number is: $x <br>";
}

// Step 10

for ($x = 0; $x <= 100; $x+=10) {
  echo "The number is: $x <br>";
}

// foreach Loop on Arrays
   // The foreach loop - Loops through a block of code for each element in an array or each property in an object.
   
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>";
}


$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
    echo "$x : $y <br>";
}

class Car {
public $color;
public $model;
public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
 }
}

$myCar = new Car("red", "Volvo");


foreach ($myCar as $x => $y) {
  echo "$x: $y <br>";
}


// break Statement
    // With the break statement we can stop the loop even if it has not reached the end:

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") break;
  echo "$x <br>";
}

// continue Statement
    // With the continue statement we can stop the current iteration, and continue with the next:

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") continue;
  echo "$x <br>";
}

// Foreach Byref
   // When looping through the array items, any changes done to the array item will, by default, NOT affect the original array:

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") $x = "pink";
}
var_dump($colors);



$colors = array("red", "green", "blue", "yellow");

foreach ($colors as &$x) {
  if ($x == "blue") $x = "pink";
}
var_dump($colors);
 
// Alternative Syntax
   // The foreach loop syntax can also be written with the endforeach statement like this

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) :
  echo "$x <br>";
endforeach;

?>