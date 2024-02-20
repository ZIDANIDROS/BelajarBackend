<?php

for ($i = 0; $i < 6; $i++) {
    if ($i <= 2) {
        for ($j = 0; $j <= $i; $j++) {
            echo "+";
        }
        echo PHP_EOL;
    } else {
        for ($z =  5; $z >= 0; $z--) {
            echo "-";
        }
        echo PHP_EOL;
    }
}
