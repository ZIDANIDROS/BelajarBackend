<?php

namespace Repository {

    use Entity\Todolist;

    interface TodolistRepository
    {
        function save(Todolist $todolist): void;
        function remove(int $number): bool;
        function findAll(): array;
    }

    class TodolistRepositoryImpl implements TodolistRepository
    {
        public array $todolist = [];

        function save(Todolist $todolist): void
        {
            $number = sizeof($this->todolist) + 1;
            $this->todolist[$number] = $todolist;
        }


        function remove(int $number): bool
        {
            if ($number < 1 || $number > count($this->todolist)) {
                return false;
            }

            unset($this->todolist[$number]);

            $this->todolist = array_values($this->todolist);

            $this->todolist = array_combine(range(1, count($this->todolist)), array_values($this->todolist));

            return true;
        }




        function findAll(): array
        {
            return $this->todolist;
        }
    }
}
