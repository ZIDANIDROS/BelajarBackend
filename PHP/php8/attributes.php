<?php

#[Attribute(Attribute::TARGET_CLASS | Attribute::TARGET_CLASS)]
class NotBlank
{
}

#[Attribute(Attribute::TARGET_PROPERTY)]
class Lenght
{
    public int $min;
    public int $max;
    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }
}

class LoginRequest
{
    #[Lenght(min: 4, max: 10)]
    #[NotBlank]
    public ?string $username;
    #[NotBlank]
    public ?string $password;
}

function validate(object $object): void
{
    $class = new ReflectionClass($object);
    $properties = $class->getProperties();
    foreach ($properties as $property) {
        validateNotBlank($property, $object);
    }
}

function validateNotBlank(ReflectionProperty $property, object $object): void
{
    $attributes = $property->getAttributes(NotBlank::class);
    if (count($attributes) > 0) {
        if (!$property->isInitialized($object))
            throw new Exception("Property $property->name is null");
        if ($property->getValue($object) == null)
            throw new Exception("Property $property->name is null");
    }
}

$request = new LoginRequest();
$request->username = "Husein";
$request->password = "rahasia";
validate($request);
