<?php
// Question 7
// A multiplication table made with two for loops

echo "<table border='1' cellpadding='3px' cellspacing='0px'>";

for ($row = 1; $row <= 6; $row++) {
    echo "<tr>";

    for ($col = 1; $col <= 5; $col++) {
        $answer = $row * $col;
        echo "<td>$row * $col = $answer</td>";
    }

    echo "</tr>";
}

echo "</table>";
