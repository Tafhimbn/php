<?php
// switch Statement
 /*
    Use the switch statement to select one of many blocks of code to be executed.

    Syntax
    switch (expression) {
    case label1:
        //code block
        break;
    case label2:
        //code block;
        break;
    case label3:
        //code block
        break;
    default:
        //code block
    }
 */

$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

?>