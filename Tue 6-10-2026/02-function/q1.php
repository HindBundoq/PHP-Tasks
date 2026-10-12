<?php
// Question 1
// Check if the number is a prime number
// A prime number can only be divided by 1 and by itself

$number = 3;

function isPrime($number)
{
    // 0 and 1 are not prime
    if ($number < 2) {
        return false;
    }

    // try every number between 2 and the number itself
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
            return false;   // it divided, so it is not prime
        }
    }

    return true;
}

if (isPrime($number)) {
    echo "$number is a prime number";
} else {
    echo "$number is not a prime number";
}
