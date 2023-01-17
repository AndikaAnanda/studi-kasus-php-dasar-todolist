<?php
require_once "./Model/ToDoList.php";
require_once "./BusinessLogic/ShowToDoList.php";
require_once "./Helper/Input.php";
require_once "ViewAddToDoList.php";
require_once "ViewDeleteToDoList.php";
/**
 * Tampilan ketika menampilkan semua to do list
 */
function viewShowToDoList(){
    while(true){
        showToDoList();
        echo "MENU : ".PHP_EOL;
        echo "1. Tambah To Do".PHP_EOL;
        echo "2. Hapus To Do".PHP_EOL;
        echo "3. Keluar".PHP_EOL;
        $choice = input("Pilih : ");
        if($choice == "1"){
            viewAddToDoList();
        } else if ($choice == "2"){
            viewDeleteToDoList();
        } else if ($choice == "3"){
            break;
        } else {
            echo "Pilihan tidak ada!" . PHP_EOL;
        }
    }
    echo "Terimakasih telah mencoba aplikasi sederhana ini!";
}