<?php
//comparison operator
$num1 = 14;
$num2 = 8;

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
//$resultEqual checks if $num1 is equal to $num2.
//$resultNotEqual checks if $num1 is not equal to $num2.
//$resultGreater checks if $num1 is greater than $num2.
//$resultLess checks if $num1 is less than $num2.
//$resultGreaterEqual checks if $num1 is greater than or equal to $num2.
//$resultLessEqual checks if $num1 is less than or equal to $num2.
?>