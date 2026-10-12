<?php
// Question 4
// Check if a number is an Armstrong number
// Armstrong means the sum of the cubes of its digits equals the number
// 407  ->  4*4*4 + 0*0*0 + 7*7*7  =  64 + 0 + 343  =  407

$number = 407;

function isArmstrong($number)
{
    $sum  = 0;
    $rest = $number;

    // take the digits one by one, from the right
    while ($rest > 0) {
        $digit = $rest % 10;        // the last digit
        $sum   = $sum + ($digit ** 3);
        $rest  = intdiv($rest, 10); // drop that digit
    }

    return $sum === $number;
}

if (isArmstrong($number)) {
    echo "$number is Armstrong Number";
} else {
    echo "$number is not Armstrong Number";
}
