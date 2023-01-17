<?php
require_once "./Model/ToDoList.php";
require_once "./BusinessLogic/AddToDoList.php";
require_once "./Helper/Input.php";
/**
 * Tampilan ketika menambahkan to do list
 */
function viewAddToDoList(){
    echo "Menambah To Do " . PHP_EOL;
    $inputUser = input("To Do List Baru : ");
    addToDoList($inputUser);
}