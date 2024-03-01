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

function validate(object $object): void
{
    $class = new ReflectionClass($object);
    $properties = $class->getProperties();
    foreach ($properties as $property) {
        validateNotBlank($property, $object);
    }
}
