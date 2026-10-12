<?php
// Question 7
// Make a random password without using rand()

$characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
$length     = 8;
$password   = "";

for ($i = 1; $i <= $length; $i++) {
    // random_int picks a random position inside the characters
    $position  = random_int(0, strlen($characters) - 1);
    $password .= $characters[$position];
}

echo $password;
