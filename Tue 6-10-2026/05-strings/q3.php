<?php
// Question 3
// Check if the sentence contains a word

$sentence = 'I am a full stack developer at orange coding academy';
$word     = 'Orange';

// stripos looks for the word and ignores capital letters
// it returns false when the word is not there
if (stripos($sentence, $word) !== false) {
    echo "Word Found!";
} else {
    echo "Word Not Found!";
}
