<?php
// Question 6
// The factorial of a number
// 5  ->  1 * 2 * 3 * 4 * 5  =  120

$number    = 5;
$factorial = 1;

for ($i = 1; $i <= $number; $i++) {
    $factorial = $factorial * $i;
}

echo "The factorial of $number is $factorial";
