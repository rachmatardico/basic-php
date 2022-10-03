<?php

$names = ["Rachmat", "Ardico", "Perdana"];

for ($i=0; $i < count($names); $i++) { 
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

foreach ($names as $index => $name) {
    echo "Data ke $index = $name" . PHP_EOL;
}

foreach ($names as $name) {
    echo "Halo $name" . PHP_EOL;
}

$person = [
    "firstName"     => "Rachmat",
    "middleName"    => "Ardico",
    "lastName"      => "Perdana"  
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}