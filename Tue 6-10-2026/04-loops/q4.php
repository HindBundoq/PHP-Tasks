<?php
// Question 4
// 1 1 1 1 1
// 1 1 1 2 2
// 1 1 3 3 3
// 1 4 4 4 4
// 5 5 5 5 5

for ($row = 1; $row <= 5; $row++) {
    for ($col = 1; $col <= 5; $col++) {

        // same idea as the letters, the first columns stay 1
        if ($col <= 5 - $row) {
            echo "1 ";
        } else {
            echo "$row ";
        }
    }
    echo "<br>";
}
