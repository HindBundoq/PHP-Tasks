<?php
// Question 4
// All the numbers between 200 and 250 that divide by 4

$numbers = array();

for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 === 0) {
        $numbers[] = $i;
    }
}

// implode puts a comma between them, with none at the end
echo implode(",", $numbers);
