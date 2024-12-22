<?php
/*
PHP divides the operators in the following groups:

    Arithmetic operators
    Assignment operators
    Comparison operators
    Increment/Decrement operators
    Logical operators
    String operators
    Array operators
    Conditional assignment operators

*/

// Arithmetic Operators
   $x = 4;
   $y = 8;

  // Addition
  $sum = $x +$y;
  echo " Sum of $x and $y = $sum <br>";	
   
  // Subtraction	
  $sub= $y - $x;
  echo "Subtraction of $x from $y is $sub <br>";
  
  // Multiplication	
  $mul = $x * $y;
  echo " Product of $x and $y is $mul <br>";
  
  // Division	
  $div = $x / $y;
  echo "Quotient of $x and $y is $div <br>";

  // Modulus	
  $mod = $x % $y;	
  echo "Remainder of $x divided by $y is $mod <br>";

  // Exponentiation	
  $expo = $x ** $y;
  echo "Result of raising $x to the $y'th power is $expo <br>";



//Assignment Operators

 // Addition
 echo $x += 1;	
 echo "<br>";
 //	Subtraction
 echo $x -= 1;
 echo "<br>";
 // Multiplication
 echo $x *= 2;
 echo "<br>";
 // Division;	
 echo $x /= 2;
 echo "<br>";
 //	Modulus
 echo $x %= 2;
 echo "<br>";


// Comparison Operators
 
var_dump ($x == 4);      // Returns true if $x is equal to $y	
echo "<br>";
var_dump ($x === "4");	// Returns true if $x is equal to $y, and they are of the same type
echo "<br>";
var_dump ($x != 5);      // Returns true if $x is not equal to $y
echo "<br>";
var_dump ($x <> $y);	   // Returns true if $x is not equal to $y	
echo "<br>";
var_dump ($x !== $y);   // Returns true if $x is not equal to $y, or they are not of the same type	
echo "<br>";
var_dump ($x > $y);      // Returns true if $x is greater than $y	
echo "<br>";
var_dump ($x < $y);	   // Returns true if $x is less than $y	
echo "<br>";
var_dump ($x >= $y);	   // Returns true if $x is greater than or equal to $y	
echo "<br>";
var_dump ($x <= $y);	   // Returns true if $x is less than or equal to $y	
echo "<br>";
var_dump ($x <=> $y);   //	Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.
echo "<br>";


?>