<?php
class animals{
    public static $uniqueName ="InyamaswaNto";

} 
echo animals::$uniqueName;//this how you can access static variable in any class
?>
<?php
class students{
    public static $staticYear = 2023;
    public static function writeTheStaticYears(){
        return self::$staticYear;//this how we access the static variables
    }
}
$newStudent = new students;
echo "<br/>".$newStudent->writeTheStaticYears();
?>


<?php 
class gender{
    public static $ages = 20;

}
class boysOnly extends gender{
    public static function checkBoysYears(){
        return parent::$ages;
    }
}

//in public you can access the content of main class directly
echo "<br/><br/>in public you can access the content of main class directly";
echo gender::$ages;

//in public you access the content of child class by using the following way!!!

echo "<br/><br/>in public you access the content of child class by using the following way!!!";
$newValue = new boysOnly();
echo $newValue->checkBoysYears();
?>