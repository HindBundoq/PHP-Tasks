<?php
// Question 2
// Show the capital and the country, sorted by the capital

$cities = array(
    "Italy"       => "Rome",
    "Luxembourg"  => "Luxembourg",
    "Belgium"     => "Brussels",
    "Denmark"     => "Copenhagen",
    "Finland"     => "Helsinki",
    "France"      => "Paris",
    "Slovakia"    => "Bratislava",
    "Slovenia"    => "Ljubljana",
    "Germany"     => "Berlin",
    "Greece"      => "Athens",
    "Ireland"     => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal"    => "Lisbon",
    "Spain"       => "Madrid",
);

// asort sorts by the value and keeps each country with its capital
asort($cities);

foreach ($cities as $country => $capital) {
    echo "The capital of $country is $capital<br>";
}
