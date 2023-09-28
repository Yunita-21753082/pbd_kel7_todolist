<?php

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";
require_once __DIR__ . "/../Config/Database.php";

use Entity\Todolist;
use Service\TodoListServiceImpl;
use Repository\TodoListRepositoryImpl;

function testShowTodoList(): void
{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListRepository->todolist[1] = new TodoList("Belajar PHP");
    $todoListRepository->todolist[2] = new TodoList("Belajar PHP OOP");
    $todoListRepository->todolist[3] = new TodoList("Belajar PHP Database"); 

    $todoListService = new TodoListServiceImpl($todoListRepository);

    $todoListService->showTodoList();
}

function testAddTodoList(): void
{
    $connection = \Config\Database::getConnection(); 
    $todoListRepository = new TodoListRepositoryImpl($connection);

    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListService->addTodoList("Belajar PHP Database"); 

    // $todoListService->showTodoList();
}

function testRemoveTodoList(): void
{
    $connection = \config\Database::getConnection();
    $todoListRepository = new TodoListRepositoryImpl($connection);

    $todoListService = new TodoListServiceImpl($todoListRepository);

    echo $todoListService->removeTodolist(5) . PHP_EOL;
    echo $todoListService->removeTodolist(4) . PHP_EOL;
    echo $todoListService->removeTodolist(3) . PHP_EOL;
    echo $todoListService->removeTodolist(2) . PHP_EOL;
    echo $todoListService->removeTodolist(1) . PHP_EOL;
}

testRemoveTodoList();



