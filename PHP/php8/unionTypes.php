<?php

class Example
{
    public string|int|bool|array $data;
}

$example = new Example();
$example->data = 12;
$example->data = "Husein Zidan";
$example->data = true;
$example->data = [];

function sampleFunction(string|array $data): void
{
    if (is_string($data)) {
        echo "Argument is string" . PHP_EOL;
    }
    if (is_array($data)) {
        echo "Argument is array" . PHP_EOL;
    }
}
sampleFunction("Husein");

function sampleFunction2(string|array $data): string|array
{
    if (is_string($data)) {
        return "string" . PHP_EOL;
    }
    if (is_array($data)) {
        return ["array"] . PHP_EOL;
    }
}

echo sampleFunction2("Husein");
