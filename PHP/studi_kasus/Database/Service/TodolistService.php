<?php

namespace Service {

    use Repository\TodolistRepository;
    use Entity\Todolist;

    interface TodolistService
    {
        function showTodolist(): void;
        function addTodolist(string $todo): void;
        function removeTodolist(int $number): void;
    }

    class TodolistServiceImpl implements TodolistService
    {
        private TodolistRepository $todolistRepository;

        public function __construct(TodolistRepository $todolistRepository)
        {
            $this->todolistRepository = $todolistRepository;
        }
        function showTodolist(): void
        {
            echo "TODOLIST" . PHP_EOL;
            $todolist = $this->todolistRepository->findAll();
            foreach ($todolist as $number => $value) {
                echo $value->getId() . ". ". $value->getTodo() . PHP_EOL;
            }
        }
        function addTodolist(string $todo): void
        {
            $todolist = new Todolist($todo);
            $this->todolistRepository->save($todolist);
        }
        function removeTodolist(int $number): void
        {
            if ($this->todolistRepository->remove($number)) {
                echo "Sukses menghapus todolist" . PHP_EOL;
            } else {
                echo "Gagal menghapus todolist" . PHP_EOL;
            }
        }
    }
}
