<?php

class Manager
{
    var string $name = "makiu";

    function sayHello(string $name): void
    {
        echo "Hai $name, myname is $this->name" . PHP_EOL;
    }
}

class wakilManager extends manager {}
