<?php
// while loop

    $i = 1;
    while ($i < 6) {
    echo $i;
    $i++;
    echo " ,";
    }
    echo "<br>";

 // break Statement 
    $i = 1;
    while ($i < 6) {
      if ($i == 3) break;
      echo $i;
      $i++;
      echo " ,";
    }
    echo "<br>";

 // continue Statement
   // With the continue statement we can stop the current iteration, and continue with the next:

    $i = 0;
    while ($i < 6) {
    $i++;
    if ($i == 3) continue;
    echo $i;
    echo " ,";
    }
    echo "<br>";


 // Alternative Syntax
    // The while loop syntax can also be written with the endwhile statement like this

    $i = 1;
    while ($i < 6):
    echo $i;
    $i++;
    echo " ,";
    endwhile;
    echo "<br>";


    // do...while Loop
       // The do...while loop will always execute the block of code at least once, it will then check the condition, and repeat the loop while the specified condition is true.

    $i = 1;

    do {
    echo $i;
    $i++;
    } while ($i < 6);
    echo "<br>";


    $i = 8;

    do {
    echo $i;
    $i++;
    } while ($i < 6);
    echo "<br>";


  //The break Statement
     // With the break statement we can stop the loop even if the condition is still true:

    $i = 1;

    do {
    if ($i == 3) break;
    echo $i;
    $i++;
    } while ($i < 6);
    echo "<br>";


 // continue Statement
    //With the continue statement we can stop the current iteration, and continue with the next:

    $i = 0;

    do {
    $i++;
    if ($i == 3) continue;
    echo $i;
    } while ($i < 6);
    echo "<br>";



?>