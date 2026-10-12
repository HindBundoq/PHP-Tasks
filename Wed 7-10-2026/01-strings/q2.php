<?php
// Question 2
// Print the next letter
// a -> b    and    z -> a

$letter = 'a';

$alphabet = "abcdefghijklmnopqrstuvwxyz";

// strpos tells us where the letter sits inside the alphabet
$position = strpos($alphabet, $letter);

// z is the last letter, so after it we go back to the first one
if ($position === 25) {
    echo $alphabet[0];
} else {
    echo $alphabet[$position + 1];
}
