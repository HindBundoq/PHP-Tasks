<?php
// Question 9
// Find the grade of the student after calculating the average
// under 60 F , under 70 D , under 80 C , under 90 B , otherwise A

$scores = array(60, 86, 95, 63, 55, 74, 79, 62, 50);

$average = array_sum($scores) / count($scores);

if ($average < 60) {
    $grade = "F";
} elseif ($average < 70) {
    $grade = "D";
} elseif ($average < 80) {
    $grade = "C";
} elseif ($average < 90) {
    $grade = "B";
} else {
    $grade = "A";
}

echo "Average: " . round($average, 2) . "<br>";
echo "Grade: $grade";
