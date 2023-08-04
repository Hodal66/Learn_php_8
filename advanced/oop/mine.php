<?php 
class Animals{
    public $firstName;
    public $lastName;
    public $ages;

    //Setter Method

    function set_firstName($firstName){
        $this->firstName = $firstName;
    }
    function set_lastName($lastName){
        $this->lastName = $lastName;
    }
    function set_ages($ages){
        $this->ages = $ages;
    }

    //getter Method

    function get_firstName(){
        return $this->firstName;
    }
    function get_lastName(){
        return $this->lastName;
    }
    function get_ages(){
        return $this->ages;
    }
}
 //Defining Method
 $bird = new Animals();
 $dog = new Animals();
 $hen = new Animals();

 //Assigning value to the Dogs
 $bird->set_firstName("gasuku");
 $bird->set_lastName("kezazz");
 $bird->set_ages(30);

 $dog->set_firstName("Maxiii");
 $dog->set_lastName("makenzii");
 $dog->set_ages(90);

 $hen->set_firstName("isake");
 $hen->set_lastName("Rusake");
 $hen->set_ages(4);

 //Displaying the result

 echo $bird->get_firstName();
 echo "<br/>";
 echo $bird->get_lastName();
 echo "<br/>";
 echo $bird->get_ages();
 echo "<br/><br/>";

 echo $dog->get_firstName();
 echo "<br/>";
 echo $dog->get_lastName();
 echo "<br/>";
 echo $dog->get_ages();
 echo "<br/><br/>";

 echo $hen->get_firstName();
 echo "<br/>";
 echo $hen->get_lastName();
 echo "<br/>";
 echo $hen->get_ages();
 echo "<br/>";
?>