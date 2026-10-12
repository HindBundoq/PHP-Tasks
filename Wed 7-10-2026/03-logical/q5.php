<?php
// Question 5
// 10 unique random numbers inside a range

$from = 11;
$to   = 20;

// range builds every number from 11 to 20, so none of them repeats
$numbers = range($from, $to);

// shuffle mixes their order
shuffle($numbers);

echo implode(" ", $numbers);
