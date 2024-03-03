<?php

class Address
{
    public ?string $country;
}

class User
{
    public ?Address $address;
}

//manual check null di php 7
function getCountry(?User $user): ?string
{
    if ($user != null) {
        if ($user->address != null) {
            return $user->address->country;
        }
    }
    return null;
}
echo getCountry(null) . PHP_EOL;
