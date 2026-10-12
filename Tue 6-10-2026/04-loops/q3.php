<?php
// Question 3
// A A A A A
// A A A B B
// A A C C C
// A D D D D
// E E E E E

$letters = array("A", "B", "C", "D", "E");

for ($row = 1; $row <= 5; $row++) {
    for ($col = 1; $col <= 5; $col++) {

        // the first columns stay A, the rest take the letter of the row
        if ($col <= 5 - $row) {
            echo "A ";
        } else {
            echo $letters[$row - 1] . " ";
        }
    }
    echo "<br>";
}
