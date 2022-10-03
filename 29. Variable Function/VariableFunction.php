<?php

function foo()
{
    echo "FOO" . PHP_EOL;
}

function bar()
{
    echo "BAR" . PHP_EOL;
}

$functionYangAkanDipanggil = "foo";
$functionYangAkanDipanggil();

$functionYangAkanDipanggil = "bar";
$functionYangAkanDipanggil();

function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string
{
    return "Sample $name";
}

sayHello("Rachmat","sampleFunction");
sayHello("Rachmat","strtolower");
sayHello("Rachmat","strtoupper");