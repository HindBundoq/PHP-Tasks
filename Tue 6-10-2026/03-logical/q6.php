<?php
// Question 6
// A simple calculator with the four main operations

$first    = 10;
$second   = 5;
$operator = "*";

switch ($operator) {
    case "+":
        $result = $first + $second;
        break;
    case "-":
        $result = $first - $second;
        break;
    case "*":
        $result = $first * $second;
        break;
    case "/":
        // we can never divide by zero
        if ($second === 0) {
            $result = "Cannot divide by zero";
        } else {
            $result = $first / $second;
        }
        break;
    default:
        $result = "Unknown operator";
}

echo "$first $operator $second = $result";
