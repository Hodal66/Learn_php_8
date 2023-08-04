<?php 
abstract class Car{
     public $name;
     function __construct($name){
        $this->name=$name;
    }
    abstract function introduction():string;
}

//ADD CHILDREN CLASSES

class Volvo extends Car{
    public function introduction():string{
        return "This is $this->name expected to be ====> Volvo car!!!";
    }
}

class Move extends Car{
    public function introduction():string{
        return  "This is $this->name expected to be ====> Move car";
    }
}

class MaxBenz extends Car{
    public function introduction():string{
        return "This is $this->name expected to be ====> MaxBenz car";
    }
}

$volvo = new Volvo("Volvo");
echo $volvo->introduction();
echo "<br/>";

$move = new Move("Move");
echo $move->introduction();
echo "<br/>";

$maxbenz = new MaxBenz("Max Benzi");
echo $maxbenz->introduction();

?>