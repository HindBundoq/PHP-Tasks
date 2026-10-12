<?php
// Question 4
// Insert a new item at any position
// location 4, new item $  ->  1 2 3 $ 4 5

$numbers  = array(1, 2, 3, 4, 5);
$location = 4;
$newItem  = '$';

// places start at 0, so location 4 is index 3
// the 0 means delete nothing, just insert
array_splice($numbers, $location - 1, 0, $newItem);

echo implode(" ", $numbers);
