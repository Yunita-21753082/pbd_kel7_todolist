<?php

require_once _DIR_ . "/../Entity/Todolist.php";
require_once _DIR_ . "/../Repository/TodolistRepository.php";
require_once _DIR_ . "/../Service/TodolistService.php";
require_once _DIR_ . "/../Config/Database.php";

use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testShowTodolist(): void
{
    $connection = \Config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodolist();
}

function testAddTodolist(): void
{
    $connection = \Config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    // $todolistService->showTodolist();
}

function testRemoveTodolist(): void
{
    $connection = \Config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);

    $todolistService = new TodolistServiceImpl($todolistRepository);

    echo $todolistService->removeTodolist(10) . PHP_EOL;
    echo $todolistService->removeTodolist(9) . PHP_EOL;
    echo $todolistService->removeTodolist(8) . PHP_EOL;
    echo $todolistService->removeTodolist(7) . PHP_EOL;
    echo $todolistService->removeTodolist(6) . PHP_EOL;
    echo $todolistService->removeTodolist(5) . PHP_EOL;
    echo $todolistService->removeTodolist(4) . PHP_EOL;
    echo $todolistService->removeTodolist(3) . PHP_EOL;
    echo $todolistService->removeTodolist(2) . PHP_EOL;
    echo $todolistService->removeTodolist(1) . PHP_EOL;

}

testShowTodolist();