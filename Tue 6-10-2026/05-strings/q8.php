<?php
// Question 8
// Replace the first word of the sentence with another word

$sentence = 'That new trainee is so genius.';
$newWord  = 'Our';

// cut the sentence into words
$words = explode(" ", $sentence);

// change the first word
$words[0] = $newWord;

// glue the words back together
echo implode(" ", $words);
