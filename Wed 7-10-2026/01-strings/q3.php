<?php
// Question 3
// Part A: insert a string at a given position
// Part B: get the first word of a sentence

// ----- Part A -----
$text = 'The brown fox';

// position 4 is right after "The ", and the 0 means delete nothing
$result = substr_replace($text, "quick ", 4, 0);

echo $result . "<br>";

// ----- Part B -----
$sentence = 'The quick brown fox';

$words = explode(" ", $sentence);

echo $words[0];
