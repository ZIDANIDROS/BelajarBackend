<?php

namespace Service {
    use Repository\TodolistRepository;
    interface TodolistService
    {
        function showTodolist(): void;
        function addTodolist(string $todo): void;
        function removeTodolist(int $number): void;
    }

    class TodolistRepositoryImpl implements TodolistService
    {
        private TodolistRepository $todolistRepository;

        public function __cunstruct(TodolistRepository $todolistRepository){
            $this->todolistRepository = $todolistRepository;
        }
        private TodolistRepository
        function showTodolist(): void
        {
            echo "TODOLIST" . PHP_EOL;
            $todolist = $this->todolistRepository->findAll();
            foreach ($this->todolistRepository->findAll() as $number => $value) {
                echo "$number . $value" . PHP_EOL;
            }
        }
        function addTodolist(string $todo): void
        {
        }
        function removeTodolist(int $number): void
        {
        }
    }
}
