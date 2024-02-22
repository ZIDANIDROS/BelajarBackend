<?php

function factorial(int $a)
{
    $result = 1;
    for ($i = $a; $i >= 1; $i--) {
        $result *= $i;
    }
    return $result;
}

var_dump(factorial(5));

function rekrusif(int $result)
{
    if ($result == 1) {
        return 1;
    } else {
        return  $result * rekrusif($result - 1);
    }
}
var_dump(rekrusif(5));
