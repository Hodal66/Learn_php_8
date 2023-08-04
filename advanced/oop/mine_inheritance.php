<?php 
class Student{
    public $firstName;
    public $lastName;
    public $ages;
    public $className;

    public function __construct($firstName,$lastName,$ages,$className){
        $this->firstName =$firstName;
        $this->lastName = $lastName;
        $this->ages=$ages;
        $this->className = $className;
    }

    public function mainIntroduction(){
        echo "wellcome to my class number 15";
    }

    public function mainContent(){
        echo "<br/>Wehave student called {$this->lastName} {$this->firstName} who have {$this->ages} Years and he is studing in {$this->className}";
    }
}

class SeniorOneStudent extends Student{
    public function otherInfo($ages){
        if($ages > 20){
            echo "<br/>This Student is an adult";
        }else{
            echo "<br/>This Student is steal young";
        }
    }
}
echo "<h2>Allinformation Of Student in Senior One !!!<br/><br/></h2> <h3>";

$stundent1 = new SeniorOneStudent("Muheto","Hodal",27,"B");
$stundent1->mainIntroduction();
$stundent1->mainContent();
$stundent1->otherInfo(27);

echo "<br/><br/>Information of second Student!!<br/>";

$stundent2 = new SeniorOneStudent("Uwineza","Marie claire",10,"E");
$stundent2->mainContent();
$stundent2->otherInfo(10);

echo "<br/> Ok Now this is the EOF!!";

?>