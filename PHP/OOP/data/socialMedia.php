<?php

class SocialMedia
{
    public string $name;
}

class facebook extends SocialMedia
{
    final public function login(string $username, string $password): bool
    {
        return true;
    }
}

class Wa extends facebook
{
    // error karena final
    // public function login(string $username, string $password): bool
    // {
    //     return true;
    // }
}
