<?php

namespace Service {
    interface TodolistService
    {
        function showTodolist(): void;
        function addTodolist(string $todo): void;
        function removeTodolist(int $number): void;
    }

    class TodolistRepositoryImpl implements TodolistService
    {
        function showTodolist(): void
        {
        }
        function addTodolist(string $todo): void
        {
        }
        function removeTodolist(int $number): void
        {
        }
    }
}
