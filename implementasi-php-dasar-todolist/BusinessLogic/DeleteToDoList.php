<?php
/**
 * Menghapus to do list
 */
function deleteToDoList(int $number): bool{
    global $toDoList;

    //kondisi ketika angka yang di input tidak tersedia
    if($number > sizeof($toDoList)){
        return false;
    }

    for($i = $number; $i < sizeof($toDoList); $i++){
        $toDoList[$i] = $toDoList[$i + 1];
    }
    unset($toDoList[sizeof($toDoList)]);
    return true;
}