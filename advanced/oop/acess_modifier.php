<?php
class Fruit{
    public $name;
    private $color;
    protected $size;
    //add setter function 
    function set_name($name){
        $this->name = $name;
    }
   protected function set_color($color){ //Error
        $this->color = $color;
    }
   private function set_size($size){//Error
        $this->size =$size;
    }
} 
$mangoes = new Fruit;
$mangoes->name ="Umunyarwanda";
// $mangoes->color = "red";//Error
// $mangoes->size =900;//Error
echo $mangoes->name;
?>