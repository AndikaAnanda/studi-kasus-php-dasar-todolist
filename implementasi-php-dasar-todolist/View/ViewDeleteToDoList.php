<?php
require_once "./BusinessLogic/DeleteToDoList.php";
require_once "./Helper/Input.php";
/**
 * Tampilan ketika menghapus to do list
 */
function viewDeleteToDoList(){
    $inputUser = (int)input("No. To Do List : ");
    $success = deleteToDoList($inputUser);
    if($success){
        echo "Berhasil menghapus".PHP_EOL;
    } else {
        echo "Gagal menghapus" . PHP_EOL;
    }
}