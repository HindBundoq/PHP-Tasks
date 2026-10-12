<?php
// Question 6
// Show the average temperature, then the 5 lowest and the 5 highest

$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64,
                      76, 63, 75, 76, 73, 68, 62, 73, 72, 65,
                      74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

$average = array_sum($temperatures) / count($temperatures);

echo "Average Temperature is: " . round($average, 1) . "<br>";

// after sorting, the lowest are at the start and the highest at the end
sort($temperatures);

$lowest  = array_slice($temperatures, 0, 5);
$highest = array_slice($temperatures, -5);

echo "List of five lowest temperatures: " . implode(", ", $lowest) . "<br>";
echo "List of five highest temperatures: " . implode(", ", $highest) . "<br>";
