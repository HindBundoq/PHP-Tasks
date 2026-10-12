<?php
// Question 5
// Remove the dashes from the end of the string

$text = 'The quick brown fox jumps over the lazy dog---';

// rtrim cleans the right side only, and we tell it to clean dashes
echo rtrim($text, "-");
