<?php
class Fruit{
    //initial declaration
    public $name;
    public $color;
    //How to create method
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
    return $this->name;
    }

    //HOW TO CREATE METHOD
}
$apple = new Fruit();
$banana = new Fruit();

$apple->set_name("Apple");
$banana->set_name("Kamara");

echo $apple->get_name();
echo "<br/> Hello Its done!!!";
echo $banana->get_name();
?>