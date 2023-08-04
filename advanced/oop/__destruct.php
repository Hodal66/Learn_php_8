<?php
class Fruit{
    public $name;
    public $color;

    function __construct($name,$color){
        $this->name =$name;
        $this->color =$color;
    }
    function __destruct(){
        echo "Hello the Name is {$this->name} and the color is {$this->color}";
    }

} 

$mangoes = new Fruit("rwandanMangoes","yellow");
?>