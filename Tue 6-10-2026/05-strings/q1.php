<?php
// Question 1
// Change the case of a string in four ways

$text = "orange coding academy";

echo "a) " . strtoupper($text) . "<br>";   // all capitals
echo "b) " . strtolower($text) . "<br>";   // all small
echo "c) " . ucfirst($text) . "<br>";      // first letter of the string
echo "d) " . ucwords($text) . "<br>";      // first letter of every word
