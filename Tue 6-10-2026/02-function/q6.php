<?php
// Question 6
// Remove the duplicates from an array

$array1 = array(2, 4, 7, 4, 8, 4);

function removeDuplicates($numbers)
{
    // array_unique keeps the old keys, array_values renumbers them
    return array_values(array_unique($numbers));
}

echo "<pre>";
print_r(removeDuplicates($array1));
echo "</pre>";
