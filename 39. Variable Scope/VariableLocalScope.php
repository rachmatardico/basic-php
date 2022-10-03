<?php

function createName()
{
    $name = "Rachmat"; // local scope
}

createName();
echo $name . PHP_EOL;