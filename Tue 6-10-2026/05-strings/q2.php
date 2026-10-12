<?php
// Question 2
// Split the numbers into a time format  085119  ->  08:51:19

$time = '085119';

// substr takes a piece of the string: start position, how many characters
$hours   = substr($time, 0, 2);
$minutes = substr($time, 2, 2);
$seconds = substr($time, 4, 2);

echo "$hours:$minutes:$seconds";
