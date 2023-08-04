<?php
class Fruit{
    public $name;
    public $colos;
    public $weight;

    public function __construct($name,$color,$weight){
        $this->name=$name;
        $this->color=$color;
        $this->weight =$weight;
    }

    public function introduction(){
        echo "The name of this fruit is {$this->name} and it has the {$this->color} Color with {$this->weight} Weigth";
    }
} 

class Strawbery extends Fruit{
    public function get_name(){
      echo "<br/> This is now a strawbery that fine ";
    }
}
$straw_bery = new Strawbery("StawberryNumber1","Orange",400);
$straw_bery->introduction();
$straw_bery->get_name();
echo "apprication finisdhe excecution!!";

?>