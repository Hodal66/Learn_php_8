<?php 
class Properties{
    public static function checkPropertHearth(){
    echo "the property hearth is good right now!";
    }

}
Properties::checkPropertHearth();
?>

<?php
class Greeting{
    public static function welcomeNow(){
        echo "<br/>you are welcome to this programing languege!!";
    }
    public function __construct(){
        self::welcomeNow();//This is we can call method inside the same class
    }
} 
new Greeting();
new Greeting();
?>
<?php
//You can call one method from class one class to another class
class Number1{
    public static function newUserWelcomeMsg(){
        echo "<br/><br/><br/>You are welcome to the new face!!";
    }
} 
class Number2{
    public static function secondUserWelcomeMsg(){
        Number1::newUserWelcomeMsg();
    }
}

$newObject = new Number2();
echo $newObject->secondUserWelcomeMsg();
?>

<?php
//This is how you can access the method of the children class where you can use parent keyword
class Domain{
    protected static function checkWebstiteName(){
        return "<br/>www.hodal1.verlcel.app";
    }
} 
class DomainHodal extends Domain{
    public function __construct(){
        $this->newWebsite = parent::checkWebstiteName();
    }

}
$dobleCheckWeb = new DomainHodal();
echo $dobleCheckWeb ->newWebsite;
?>