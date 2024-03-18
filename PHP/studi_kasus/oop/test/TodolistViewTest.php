<?php

require_once __DIR__ . '/../Entity/Todolist.php';
require_once __DIR__ . '/../Repository/TodolistRepository.php';
require_once __DIR__ . '/../Service/TodolistService.php';
require_once __DIR__ . '/../View/TodolistView.php';
require_once __DIR__ . '/../Helper/Input.php';


use \Entity\Todolist;
use \Repository\TodolistRepositoryImpl;
use \Service\TodolistServiceImpl;
use \view\TodolistView;

function testViewShowTodolist(): void
{
    $todolistsRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistsRepository);
    $todolistsView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP DATABASE");

    $todolistsView->showTodolist();
}

function testViewAddTodolist(): void
{
    $todolistsRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistsRepository);
    $todolistsView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP DATABASE");

    $todolistService->showTodolist();

    $todolistsView->addTodolist();

    $todolistService->showTodolist();
}


function testViewRemoveTodolist(): void
{
    $todolistsRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistsRepository);
    $todolistsView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP DATABASE");

    $todolistService->showTodolist();

    $todolistsView->removeTodolist();

    $todolistService->showTodolist();

    $todolistsView->removeTodolist();

    $todolistService->showTodolist();
}
testViewRemoveTodolist();
