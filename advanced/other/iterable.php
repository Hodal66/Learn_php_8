<?php 
class MyAnimalsInterface implements Iterator{
   private $numberOfAnimals = 0;
   public $namesOfAnimals =[];
   public function __construct($numberOfAnimals){
   $this->numberOfAnimals=array_values($numberOfAnimals);
   }
public function current(){
    $this->nameOfAnimal = $namesOfAnimals[$this->$numberOfAnimals];
}
public function rewind(){
    $this->namesOfAnimals=0;
}
public function key(){
    $this->numberOfAnimals;
}
public function next(){
    $this->numberOfAnimals++;
}
public function valid(){
    $this->numberOfAnimals < count($this->$numberOfAnimals);
}
function iterateAnimals(iterable $allAnimals){
    foreach($allAnimals as $animals){
        echo $animals;
    }
}

}
    $myIrableAnimals = new MyAnimalsInterface(["aa","bb","cc","dd","ee"]);
    iterateAnimals($myIrableAnimals);
?>