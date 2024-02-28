<?php

class Student
{
    public string $id;
    public string $name;
    public int $value;

    //magicalFunction "__toString"
    public function __toString(): string
    {
        return "Student id : $this->id, name : $this->name, Value : $this->value";
    }

    //magicalFunction "__invoke"
    public function __invoke(...$arguments)
    {
        $join = join("\n", $arguments);
        echo "Invoice Student with arguments $join" . PHP_EOL;
    }

    //magicalFunction "__debugInfo"
    public function __debugInfo(): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "author" => "Husein Zidan Alaydrus"
        ];
    }
}
