<?php
// Question 2
// Floyd triangle
// Row 1 has one number, row 2 has two, and the numbers keep counting up

$lines  = 5;
$number = 1;

for ($row = 1; $row <= $lines; $row++) {

    // the row number tells us how many numbers to print
    for ($col = 1; $col <= $row; $col++) {
        echo $number . " ";
        $number++;
    }

    echo "<br>";
}
