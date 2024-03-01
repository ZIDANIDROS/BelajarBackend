<?php

require_once "error/ValidationException.php";
require_once "data/loginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();

ValidationUtil::validate($request);
