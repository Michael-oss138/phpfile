<?php
$num1 = 10;
$num2 = 12;

// Equal to
$resultEqual = ($num1 == $num2);
echo "Equal To Result: " . ($resultEqual ? "True" : "False") . "<br>";

// Not equal to
$resultNotEqual = ($num1 != $num2);
echo "Not Equal To Result: " . ($resultNotEqual ? "True" : "False") . "<br>";

// Greater than
$resultGreater = ($num1 > $num2);
echo "Greater Than Result: " . ($resultGreater ? "True" : "False") . "<br>";

// Less than
$resultLess = ($num1 < $num2);
echo "Less Than Result: " . ($resultLess ? "True" : "False") . "<br>";

// Greater than or equal to
$resultGreaterEqual = ($num1 >= $num2);
echo "Greater Than or Equal To Result: " . ($resultGreaterEqual ? "True" : "False") . "<br>";

// Less than or equal to
$resultLessEqual = ($num1 <= $num2);
echo "Less Than or Equal To Result: " . ($resultLessEqual ? "True" : "False") . "<br>";
//In PHP, the terms "relational operators" and "comparison operators" are often used interchangeably.
// The operators ==, !=, >, <, >=, and <= are commonly referred to as both relational and comparison operators 
?>
