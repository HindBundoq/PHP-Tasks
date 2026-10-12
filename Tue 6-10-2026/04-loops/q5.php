<?php
// Question 5
// 1 0 0 0 0
// 0 2 0 0 0
// 0 0 3 0 0
// 0 0 0 4 0
// 0 0 0 0 5

for ($row = 1; $row <= 5; $row++) {
    for ($col = 1; $col <= 5; $col++) {

        // on the diagonal the row and the column are the same
        if ($row === $col) {
            echo "$row ";
        } else {
            echo "0 ";
        }
    }
    echo "<br>";
}
