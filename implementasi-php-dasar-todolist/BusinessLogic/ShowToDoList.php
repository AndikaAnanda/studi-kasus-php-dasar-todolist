<?php
/**
 * Menampilkan semua to do list
 */
function showToDoList(){
    global $toDoList;
    echo "APLIKASI TODOLIST BERBASIS CLI".PHP_EOL;
    foreach($toDoList as $number => $value){
        echo "$number. $value";
    }
}