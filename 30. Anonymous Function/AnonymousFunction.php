<?php

$sayHello = function(string $name){
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Rachmat");
$sayHello("Ardico");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Goodbye $finalName" . PHP_EOL;    
}

sayGoodBye("Rachmat", function(string $name): string{
    return strtoupper($name);
});

$filterFunction = function(string $name): string{
    return strtoupper($name);
};

sayGoodBye("Ardico", $filterFunction);

$firstName = "Rachmat";
$lastName = "Ardico";

$sayHelloRachmat = function() use ($firstName, $lastName){
    echo "Hello $firstName $lastName". PHP_EOL;
};
$sayHelloRachmat();

$firstName = "Ardico";
$lastName = "Perdana";
