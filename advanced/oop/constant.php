<?php
class ThankYou{
    public const THANK_YOU_MSG ="Thank you for Visiting me!!!";
    public const WELCOME_MSG ="Welcome to our Website !!!";
    public function welcomeToHomeMSG(){
    echo self::WELCOME_MSG;//This is how you can call constant value inside class
    }

} 

$good_by = new ThankYou;

$good_by->welcomeToHomeMSG();

echo "<br/>".ThankYou::THANK_YOU_MSG;//this is how you can call constant value out of the class;
?>