<?php

function factorial(int $a)
{
    $result = 1;
    for ($i = $a; $i >= 1; $i--) {
        $result *= $i;
    }
    return $result;
}

echo factorial(5);
