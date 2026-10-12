<?php
// Question 5
// Calculate the monthly electricity bill
// first 50 units      2.50 JOD
// next 100 units      5.00 JOD
// next 100 units      6.20 JOD
// above 250 units     7.50 JOD

$units = 320;
$bill  = 0;

if ($units <= 50) {
    $bill = $units * 2.50;
} elseif ($units <= 150) {
    // the first 50 units, then whatever is left
    $bill = (50 * 2.50) + (($units - 50) * 5.00);
} elseif ($units <= 250) {
    $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
} else {
    $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
}

echo "Units: $units <br>";
echo "Total bill: " . number_format($bill, 2) . " JOD";
