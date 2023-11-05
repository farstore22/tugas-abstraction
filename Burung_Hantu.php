<?php
include_once "Hewan.php";

class Burung_Hantu implements Hewan{
    public function bergerak(): void{
        echo "Burung Hantu Terbang <br>";
    }
    public function makan(): void{
        echo "Burung Hantu Makan<br>";
}
}