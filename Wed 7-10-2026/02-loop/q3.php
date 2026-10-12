<?php
// Question 3
//     A
//    A B
//   A B C
//  A B C D
// A B C D E
//  A B C D
//   A B C
//    A B
//     A

$letters = array("A", "B", "C", "D", "E");
$size    = 5;

// the rows go up to 5 and then back down to 1
$rows = array(1, 2, 3, 4, 5, 4, 3, 2, 1);

// pre keeps the spaces visible in the browser
echo "<pre>";

foreach ($rows as $row) {

    // the shorter the row, the more spaces we need in front
    echo str_repeat(" ", $size - $row);

    for ($col = 1; $col <= $row; $col++) {
        echo $letters[$col - 1] . " ";
    }

    echo "\n";
}

echo "</pre>";
