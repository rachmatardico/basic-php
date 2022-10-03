<?php

// Union
$first = [
    "first_name" => "Rachmat"
];

$last = [
    "first_name" => "Budi",
    "last_name"  => "Ardico"
];

$full = $last + $first;
var_dump($full);

// Equality & Identity
$a = [
    "first_name" => "Rachmat",
    "last_name"  => "Ardico"
];

$b = [
    "last_name"  => "Ardico",
    "first_name" => "Rachmat"
];

var_dump($a == $b);
var_dump($b === $a);

