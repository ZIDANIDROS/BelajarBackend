<?php

function testMixed(mixed $param): mixed
{
    if (is_array($param)) {
        return [];
    } elseif (is_string($param)) {
        return "eko";
    } elseif (is_numeric($param)) {
        return 1;
    } else {
        return null;
    }
}
