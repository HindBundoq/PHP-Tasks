<?php
// ===== 1. echo: the print command =====
echo "Hello Orange Academy";
echo "<br>";


// ===== 2. Variables: a box with a name =====
$name = "Hind";
$age  = 22;

echo $name;
echo "<br>";
echo "My name is $name and I am $age years old";
echo "<br>";


// ===== 3. Math =====
$a = 10;
$b = 5;

echo $a + $b;   // 15
echo "<br>";
echo $a * $b;   // 50
echo "<br>";


// ===== 4. if / else: the program decides =====
$score = 80;

if ($score >= 60) {
    echo "Pass";
} else {
    echo "Fail";
}
