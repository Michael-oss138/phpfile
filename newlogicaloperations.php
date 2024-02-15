<?php
$num1 = 17;
$num2 = 12;

// AND operator
$resultAnd = ($num1 > 0 && $num2 < 12);
echo "AND Result: " . ($resultAnd ? "True" : "False") . "<br>";

// OR operator
$resultOr = ($num1 > 0 || $num2 > 12);
echo "OR Result: " . ($resultOr ? "True" : "False") . "<br>";

// XOR operator
$resultXor = ($num1 == 12 XOR $num2 == 7);
echo "XOR Result: " . ($resultXor ? "True" : "False") . "<br>";

// Logical NOT operator
$resultNot = !($num1 > $num2);
echo "NOT Result: " . ($resultNot ? "True" : "False") . "<br>";

// Equality operator
$resultEqual = ($num1 == $num2);
echo "Equality Result: " . ($resultEqual ? "True" : "False") . "<br>";

// Inequality operator
$resultNotEqual = ($num1 != $num2);
echo "Inequality Result: " . ($resultNotEqual ? "True" : "False") . "<br>";

// Greater than operator
$resultGreater = ($num1 > $num2);
echo "Greater Than Result: " . ($resultGreater ? "True" : "False") . "<br>";

// Less than operator
$resultLess = ($num1 < $num2);
echo "Less Than Result: " . ($resultLess ? "True" : "False") . "<br>";

// Greater than or equal to operator
$resultGreaterEqual = ($num1 >= $num2);
echo "Greater Than or Equal To Result: " . ($resultGreaterEqual ? "True" : "False") . "<br>";

// Less than or equal to operator
$resultLessEqual = ($num1 <= $num2);
echo "Less Than or Equal To Result: " . ($resultLessEqual ? "True" : "False") . "<br>";
//$resultAnd checks if both $num1 is greater than 0 and $num2 is less than 10.
//$resultOr checks if either $num1 is greater than 0 or $num2 is greater than 10.
//$resultXor checks if either $num1 is equal to 10 or $num2 is equal to 5, but not both.
//$resultNot checks if $num1 is not greater than $num2.
//$resultEqual checks if $num1 is equal to $num2.
//$resultNotEqual checks if $num1 is not equal to $num2.
//$resultGreater checks if $num1 is greater than $num2.
//$resultLess checks if $num1 is less than $num2.
//$resultGreaterEqual checks if $num1 is greater than or equal to $num2.
//$resultLessEqual checks if $num1 is less than or equal to $num2.
?>