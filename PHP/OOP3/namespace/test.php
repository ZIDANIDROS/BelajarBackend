<?php

namespace data\one {
    class test
    {
        var $name;
        var $addres;
        var $country;

        public function __construct(string $name, ?string $addres, ?string $country)
        {
            $this->name = $name;
            $this->addres = $addres;
            $this->country = $country;

            echo "Object person namespace one $this->name is construct" . PHP_EOL;
        }

        function sayHello1($name)
        {
            echo "sayhello1 Hello namespace one " . $name . " ,saya {$this->name}" . PHP_EOL;
        }

        function sayHello2(?string $name)
        {
            if (is_null($name)) {
                echo "sayhello2 Hello namespace one " . $this->name . PHP_EOL;
            } else {
                echo "sayhello2 Hello namespace one $name , my name is  {$this->name}" . PHP_EOL;
            }
        }

        function __destruct()
        {
            echo "Object person namespace one $this->name is destruct" . PHP_EOL;
        }
    }
}

namespace data\two {
    class test
    {
        var $name;
        var $addres;
        var $country;

        public function __construct(string $name, ?string $addres, ?string $country)
        {
            $this->name = $name;
            $this->addres = $addres;
            $this->country = $country;

            echo "Object person namespace two $this->name is construct" . PHP_EOL;
        }

        function sayHello1($name)
        {
            echo "sayhello1 namespace two Hello " . $name . " ,saya {$this->name}" . PHP_EOL;
        }

        function sayHello2(?string $name)
        {
            if (is_null($name)) {
                echo "sayhello2 namespace two Hello " . $name . " ,saya {$this->name}" . PHP_EOL;
            } else {
                echo "sayhello2 namespace two Hello $name , my name is  {$this->name}" . PHP_EOL;
            }
        }

        function __destruct()
        {
            echo "Object person namespace two $this->name is destruct" . PHP_EOL;
        }
    }
}
