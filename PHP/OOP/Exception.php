<?php

require_once "error/ValidationException.php";
require_once "data/loginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "Husein";
$loginRequest->password = "Zidan";

validateLoginRequest($loginRequest);
echo "Valid" . PHP_EOL;
