<?php

function validate(?string $name)
{
    $result = $name == "Husein" ? "Sukses" : throw new Exception("Salah woy");
    echo "Hello $result" . PHP_EOL;
}

validate("Husein");
