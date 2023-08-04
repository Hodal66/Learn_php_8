<?php
interface Animals{
    public function animalSound();
}

class Cow implements Animals{
    public function animalSound(){
        echo "Mbaaa";
    }
}
class Dog implements Animals{
    public function animalSound(){
        echo "Wooothh";
    }

}
class Chicken implements Animals{
    public function animalSound(){
        echo "cokcokcok";
    }
}

$animal_cow = new Cow();
$animal_dog = new Dog();
$animal_chicken = new Chicken();

$all_animals = array($animal_chicken,$animal_cow,$animal_dog);

foreach($all_animals as $my_animal){
    echo $my_animal->animalSound();
    echo "<br/>";
}
?>