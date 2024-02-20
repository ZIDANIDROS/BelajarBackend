<?php

for ($i = 0; $i < 10; $i++) {
    if ($i < 5) {
        for ($j = 0; $j <= $i / 2; $j++) {
            echo "*";
        }
        echo PHP_EOL;
    }
    if ($i > 5) {
        for ($z =  $i - 1; $z >= 0; $z--) {
            echo "*";
        }
        echo PHP_EOL;
    } else {
        echo PHP_EOL;
        echo "FINISH";
    }
}
