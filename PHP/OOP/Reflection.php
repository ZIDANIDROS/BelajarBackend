<?php

require_once "error/ValidationException.php";
require_once "data/loginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = null;
$request->password = null;

// ValidationUtil::validate($request);
ValidationUtil::validateReflection($request);

class RegisterUserRequest
{
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register = new RegisterUserRequest();
$register->name = "Husein";
$register->address = "zidan";
$register->email = "zidan@gmail.com";

ValidationUtil::validateReflection($register);
