<?php
// Question 1
// Print the Fibonacci sequence
// Every number is the sum of the two numbers before it

$count  = 10;
$first  = 0;
$second = 1;

for ($i = 1; $i <= $count; $i++) {

    echo $first;

    // no comma after the last number
    if ($i < $count) {
        echo ", ";
    }

    // move one step forward in the sequence
    $next   = $first + $second;
    $first  = $second;
    $second = $next;
}
