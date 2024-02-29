<?php

require_once "error/ValidationException.php";
require_once "data/loginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "Husein";
$loginRequest->password = "zidan";
try {
    validateLoginRequest($loginRequest);
} catch (ValidationException | Exception $exception) {
    echo "Validation error : {$exception->getMessage()}" . PHP_EOL;
} finally {
    echo "Error gak error, tetap dipanggil" .  PHP_EOL;
}
echo "Valid" . PHP_EOL;
