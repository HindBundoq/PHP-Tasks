<?php
// Question 3
// Display the first element
// The keys here are 4, 6 and 11, so $color[0] does not exist

$color = array(4 => 'white', 6 => 'green', 11 => 'red');

// array_values gives us the same values with new keys starting at 0
$values = array_values($color);

echo $values[0];
