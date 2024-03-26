<?php 

namespace Config{
    class Database{
        static function getConnection() : \PDO
        {
            $host       = 'localhost';
            $database   = 'belajar_php_todolist';
            $port       = 3306;
            $user       = 'root';
            $password   = '';

            return new \PDO("mysql:host=$host;port=$port;dbname=$database", $user, $password);
        }
    }
}