<?php

function validate(string $value)
{
    if (trim($value) == "") {
        throw new Exception("Error Processing Request");
    }
}

/*

try {
    validate("  ");
} catch (Exception $e) { gak perlu ada $e bisa di hapus selama tidak ke pake
    echo "invalid" . PHP_EOL;
}

*/

try {
    validate("  ");
} catch (Exception) {
    echo "invalid" . PHP_EOL;
}
