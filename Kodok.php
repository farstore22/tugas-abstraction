<?php
include_once "Hewan.php";

class Kodok implements Hewan{
    public function bergerak(): void{
        echo "Kodok Bergerak <br>";
    }
    public function makan(): void{
        echo "Kodok Makan <br>";
    }
}