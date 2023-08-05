<?php
trait message{
    public function message1(){
        echo "OOP is Awesome!!";
    }
}

class Welcome{
    use message;
}

$new_message = new Welcome;
$new_message->message1();
?>