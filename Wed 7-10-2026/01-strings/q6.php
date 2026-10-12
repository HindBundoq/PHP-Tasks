<?php
// Question 6
// Take the first 5 words of the string

$text = 'The quick brown fox jumps over the lazy dog';

$words = explode(" ", $text);

// array_slice takes a piece: start at 0, take 5
$firstFive = array_slice($words, 0, 5);

echo implode(" ", $firstFive);
