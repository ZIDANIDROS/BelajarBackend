<?php

function validateLoginRequest(LoginRequest $request)
{
    if (!isset($request->username)) {
        throw new ValidationException("username is Null");
    } else if (!isset($request->password)) {
        throw new ValidationException("password is Null");
    } else if (trim($request->username) == "") {
        throw new Exception("username is Empty");
    } else if (trim($request->password) == "") {
        throw new Exception("password is Empty");
    }
}
