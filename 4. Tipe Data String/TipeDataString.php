<?php

// Single Quote
echo 'Name : ';
echo 'Rachmat Ardico Perdana';
echo "\n";

// Double Quote
echo "Name : ";
echo "Rachmat\t Ardico\t Perdana\n";

// Heredoc
echo <<<MATT
Selamat Belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ketiga membuat string
bisa menggunakan heredoc

MATT;


// Nowdoc
echo <<<'MATT'
Selamat Belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ketiga membuat string
bisa menggunakan heredoc
MATT;
