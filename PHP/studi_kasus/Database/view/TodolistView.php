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
                echo "2. Hapus Todo" . PHP_EOL;
                echo "3. Keluar" . PHP_EOL;

                $pilihan = InputHelper::input("pilih");

                if ($pilihan == 1) {
                    $this->addTodolist();
                } elseif ($pilihan == 2) {
                    $this->removeTodolist();
                } elseif ($pilihan == 3) {
                    break;
                } else {
                    echo "SALAH NOMOR!" . PHP_EOL;
                }
            }
        }

        function addTodolist(): void
        {
            echo "Menambah Todo" . PHP_EOL;

            $todo = InputHelper::input("Todo (x untuk batal)");

            if ($todo == 'x') {
                echo "batal Menambah todo" . PHP_EOL;
            } else {
                $this->todolistService->addTodolist($todo);
            }
        }
        function removeTodolist(): void
        {
            echo "menghapus todo" . PHP_EOL;
            $Pilihan = InputHelper::input("Todo (x untuk batal)");

            if ($Pilihan == 'x') {
                echo "batal Menghapus todo" . PHP_EOL;
            } else {
                $this->todolistService->removeTodolist($Pilihan);
            }
        }
    }
}
