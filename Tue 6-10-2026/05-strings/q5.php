<?php
// Question 5
// Get the username from the email address

$email = 'info@orange.com';

// cut the email at the @ sign
$parts = explode("@", $email);

// the username is the first piece
echo $parts[0];
