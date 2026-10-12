<?php
// Question 7
// Remove the commas from the numeric string
// 2,543.12  ->  2543.12

$number = '2,543.12';

echo str_replace(",", "", $number);
