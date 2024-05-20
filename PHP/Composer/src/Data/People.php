<?php

namespace huseinzidan\Data;

class People{
    public function __construct(private string $name){
        $this->name = $name;
    }

    public function sayHello(string $name): string{
        return "Hello $name, namaku $this->name";
    }
}
