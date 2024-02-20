<?php

for ($i = 0; $i < 10; $i++) {
    switch ($i):
        case $i <= 10 / 2:
            for ($j = 0; $j <= $i / 2; $j++) {
                echo "*";
            }
            echo PHP_EOL;
            break;
        default:
            for ($z =  $i - 1; $z >= 0; $z--) {
                echo "*";
            }
            echo PHP_EOL;
            break;
    endswitch;
}
