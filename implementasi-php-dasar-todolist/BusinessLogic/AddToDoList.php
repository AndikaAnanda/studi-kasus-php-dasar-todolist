<?php
/**
 * Menambah to do list
 */
function addToDoList(string $toDo){
    global $toDoList;
    $number = sizeof($toDoList) + 1;
    $toDoList[$number] = $toDo;
}