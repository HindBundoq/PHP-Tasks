<?php
// Question 4
// Remove the zeroes from the number
// 0000657022.24  ->  65722.24

$number = '0000657022.24';

// str_replace puts an empty string in place of every zero
echo str_replace("0", "", $number);
