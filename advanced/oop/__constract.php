<?php
class Dog{
    public $name;
    public $color;
function __construct($name,$color){
    $this->name =$name;
    $this->color = $color;
}

function get_name(){
    return $this->name;
}
function get_color(){
    return $this->color;
}
} 

$puxy_dog = new Dog("puxxi1","red");
echo "Now We have ".$puxy_dog->get_name()." And it's color : ".$puxy_dog->get_color();
?>