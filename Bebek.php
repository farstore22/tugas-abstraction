<?php
include_once "Hewan.php";

class Bebek implements Hewan{
    public function bergerak(): void{
        echo "Bebek Bergerak <br>";
    }
    public function makan(): void{
        echo "Bebek Makan <br>";
    }
}
