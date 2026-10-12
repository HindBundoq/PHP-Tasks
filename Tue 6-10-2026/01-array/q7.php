<?php
// Question 7
// Merge the two arrays

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

// when the same key exists in both, the second array wins
$merged = array_merge($array1, $array2);

echo "<pre>";
print_r($merged);
echo "</pre>";
