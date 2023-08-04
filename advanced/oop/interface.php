<?php
interface Animal{
    public function AnimalSound();
}

class Cat implements Animal{
    public function AnimalSound(){
        echo "Meow!!";
    }
}

$animal_cat = new Cat;
$animal_cat->AnimalSound();
?>