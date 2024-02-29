<?php

require_once "error/ValidationException.php";
require_once "data/loginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = " ";
$loginRequest->password = " ";
try {
    validateLoginRequest($loginRequest);
} catch (ValidationException $exception) {
    echo "Validation error : {$exception->getMessage()}" . PHP_EOL;
} catch (Exception $exception) {
    echo "Validation error : {$exception->getMessage()}" . PHP_EOL;
}
echo "Valid" . PHP_EOL;
