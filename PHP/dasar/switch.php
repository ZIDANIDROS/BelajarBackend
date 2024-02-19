<?php

$nilai = "Z";

switch ($nilai) {
    case "A":
        echo "anda lulus dengan cumlaude" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "lol" . PHP_EOL;
}

//bisa juga cara dibawah
switch ($nilai):
    case "A":
        echo "anda lulus dengan cumlaude" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "lol" . PHP_EOL;
endswitch;
