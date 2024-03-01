<?php

class ValidationUtil
{
    static function validate(LoginRequest $request)
    {
        if (!isset($request->username)) {
            throw new ValidationException("username is null");
        } else if (!isset($request->password)) {
            throw new ValidationException("password is null");
        }
    }
}
