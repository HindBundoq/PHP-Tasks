<?php
// Question 1
// Check if the year is a leap year
// A leap year divides by 4, but century years must divide by 400

$year = 2013;

if ($year % 4 === 0 && ($year % 100 !== 0 || $year % 400 === 0)) {
    echo "This year is a leap year";
} else {
    echo "This year is not a leap year";
}
