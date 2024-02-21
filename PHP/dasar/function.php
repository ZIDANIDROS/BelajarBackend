<?php

#default parameter
function sayHello($namas, $nama = "tayo",)
{
    echo "Hello $nama $namas" . PHP_EOL;
}

sayHello("", "HUA");
