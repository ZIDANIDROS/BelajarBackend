<?php

for ($i = 0; $i < 6; $i++) {
    if ($i <= 2) {
        for ($j = 0; $j <= $i; $j++) {
            echo "+";
        }
        echo PHP_EOL;
    } else {
        for ($z =  4 - $i; $z >= 0; $z--) {
            echo "-";
        }
        echo PHP_EOL;
    }
}
