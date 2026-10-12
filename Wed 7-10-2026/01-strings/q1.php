<?php
// Question 1
// Put a string in an array and show it with var_dump

$sentence = "Twinkle, twinkle, little star.";

// explode cuts the sentence at every space and gives an array of words
$words = explode(" ", $sentence);

echo "<pre>";
var_dump($words);
echo "</pre>";
