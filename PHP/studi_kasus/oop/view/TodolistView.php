<?php

namespace View {

    use Service\TodolistService;

    class TodolistView
    {
        private TodolistService $todolistService;

        public function __construct(TodolistService $todolistService)
        {
            $this->todolistService = $todolistService;
        }
        function showTodolist(): void
        {
            while (true) {
                $this->todolistService->showTodolist();

                echo "Menu" . PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Tambah Todo" . PHP_EOL;
                echo "3. Tambah Todo" . PHP_EOL;

                $pilihan = input("pilih");
            }
        }
        function addTodolist(): void
        {
        }
        function removeTodolist(): void
        {
        }
    }
}
