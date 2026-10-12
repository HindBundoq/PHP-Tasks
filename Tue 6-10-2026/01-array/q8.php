<?php
// Question 8
// A function that turns every string in the array to upper case

$colors = array("red", "blue", "white", "yellow");

function makeUpperCase($colors)
{
    $result = array();

    foreach ($colors as $color) {
        $result[] = strtoupper($color);
    }

    return $result;
}

echo "<pre>";
print_r(makeUpperCase($colors));
echo "</pre>";
