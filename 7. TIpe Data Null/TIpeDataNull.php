<?php 

$name = "Rachmat";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;

// Cek apakah data NULL
$name = "Rachmat";
echo "Is Name NULL? : ";
echo var_dump(is_null($name));
echo "\n";

// echo is_null($tidakAda);

// Unset
$contoh = "rachmat";
unset($contoh);
$contoh = null;
var_dump(isset($contoh));