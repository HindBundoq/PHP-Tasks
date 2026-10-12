<?php
// Question 4
// Get the file name from the url

$url = 'www.orange.com/index.php';

// explode cuts the text at every slash and gives us an array
$parts = explode("/", $url);

// the file name is the last piece
echo $parts[count($parts) - 1];
