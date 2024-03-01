<?php

#[Attribute]
class NotBlank
{
}

class LoginRequest
{
    #[NotBlank]
    public string $username;
    public string $password;
}
