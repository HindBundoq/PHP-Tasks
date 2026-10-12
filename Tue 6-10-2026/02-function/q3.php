<?php
// Question 3
// Swap two variables

$x = 12;
$y = 10;

// the & means the function changes the real variables, not copies
function swap(&$first, &$second)
{
    $temp   = $first;
    $first  = $second;
    $second = $temp;
}

swap($x, $y);

echo "x = $x <br>";
echo "y = $y";
