<?php 

$name = "Rachmat Ardico Perdana";

// Cara lama
echo "Name : ";
echo $name;
echo "\n";

echo "Name : " . $name . PHP_EOL;
echo "Name : " . 100 . PHP_EOL;

// Konversi tipe data
$valueString = (string)100;
var_dump($valueString);

$valueInteger = (int)"100";
var_dump($valueInteger);

$valueFloat = (float)"1.2";
var_dump($valueFloat);

// Mengakses karakter
$name = "Matt";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;

// Variable Parsing
echo "Hello " . $name . " Selamat belajar PHP" . PHP_EOL;
echo "Hello $name, Selamat belajar PHP" . PHP_EOL;

// Curly Brace
$var = "var";
echo "This is {$var}s" . PHP_EOL;