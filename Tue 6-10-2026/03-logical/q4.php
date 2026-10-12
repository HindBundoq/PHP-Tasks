<?php
// Question 4
// Find the largest number between three integers

$first  = 1;
$second = 5;
$third  = 9;

if ($first >= $second && $first >= $third) {
    echo $first;
} elseif ($second >= $first && $second >= $third) {
    echo $second;
} else {
    echo $third;
}
