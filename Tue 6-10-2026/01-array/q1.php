<?php
// Question 1
// Display the colors as an unordered list

$colors = array('white', 'green', 'red');

// sort them alphabetically first
sort($colors);

echo "<ul>";

foreach ($colors as $color) {
    echo "<li>$color</li>";
}

echo "</ul>";
