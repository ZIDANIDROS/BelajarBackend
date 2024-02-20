<?php

for ($i = 0; $i < 10; $i++) {
    if ($i <= 10) {
        for ($j = 0; $j <= $i / 2; $j++) {
            echo "*";
        }
        echo PHP_EOL;
    } else {
        for ($z =  $i - 1; $z >= 0; $z--) {
            echo "*";
        }
        echo PHP_EOL;
    }
}
