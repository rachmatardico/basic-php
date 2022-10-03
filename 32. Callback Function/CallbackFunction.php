<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName!" . PHP_EOL;
};

sayHello("Rachmat", "strtoupper");
sayHello("Rachmat", "strtolower");
sayHello("Rachmat", function(string $name): string{
    return strtoupper($name);
});
sayHello("Rachmat", fn (string $name) :string => strtolower($name));