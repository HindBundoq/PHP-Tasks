<?php
// Question 5
// Sort the array and show it as  key = value
// The expected output is apple, banana, lemon, orange
// so we sort by the value, not by the key

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

asort($fruits);

foreach ($fruits as $key => $fruit) {
    echo "$key = $fruit<br>";
}
