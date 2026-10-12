<?php
// Question 3
// Add the two numbers, but triple the sum when they are the same

$firstInteger  = 2;
$secondInteger = 2;

$sum = $firstInteger + $secondInteger;

if ($firstInteger === $secondInteger) {
    $sum = $sum * 3;
    echo "( $firstInteger + $secondInteger ) * 3 = $sum";
} else {
    echo "$firstInteger + $secondInteger = $sum";
}
