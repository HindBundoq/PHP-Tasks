<?php
// Question 5
// Check if a sentence is a palindrome
// We ignore spaces and punctuation, and read it the same both ways

$sentence = "Eva, can I see bees in a cave?";

function isPalindrome($sentence)
{
    $letters = "";

    // keep the letters only, all in small case
    foreach (str_split(strtolower($sentence)) as $char) {
        if ($char >= "a" && $char <= "z") {
            $letters .= $char;
        }
    }

    return $letters === strrev($letters);
}

if (isPalindrome($sentence)) {
    echo "Yes it is a palindrome";
} else {
    echo "No it is not a palindrome";
}
