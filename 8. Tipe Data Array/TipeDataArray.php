<?php 

$values = array(1,2,3,4.5);
var_dump($values);

$names = ["Rachmat", "Ardico", "Perdana"];
var_dump($names);

// Menampilkan data
var_dump($names[0]);

// Mengubah data
$names[0] = "Matt";
var_dump($names[0]);

// Menghapus data
unset($names[1]);
var_dump($names);

// Menambahkan data di akhir array
$names[] = "Joko";
var_dump($names);

//Menghitung array
var_dump(count($names));

// Map dalam array
$rachmat = array(
    "id" =>"Rachmat", 
    "name" =>"Rachmat Ardico",
    "age" => 20,
);

var_dump($rachmat);
var_dump($rachmat["name"]);

$budi = [
    "id"        => "budi",
    "name"      => "Budi Nugraha",
    "age"       => 21
];

var_dump($budi);

// Array didalam Array
$rachmat = array(
    "id" =>"Rachmat", 
    "name" =>"Rachmat Ardico",
    "age" => 20,
    "address" => [
        "city"         => "Lampung",
        "country"      => "Indonesia",
    ]
);

var_dump($rachmat["address"]["country"]);