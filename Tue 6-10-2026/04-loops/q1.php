<?php
// Question 1
// Show 1-2-3-4-5-6-7-8-9-10 with no dash at the start or the end

for ($i = 1; $i <= 10; $i++) {
    echo $i;

    // put a dash after every number except the last one
    if ($i < 10) {
        echo "-";
    }
}
