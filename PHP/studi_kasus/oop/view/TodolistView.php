<?php

namespace View {

    use Service\TodolistService;
    use Helper\InputHelper;

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

                $pilihan = InputHelper::input("pilih");

                if ($pilihan == 1) {
                    $this->addTodolist();
                } else {
                    $this->removeTodolist();
                }
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
