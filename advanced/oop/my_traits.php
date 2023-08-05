<?php
trait message1{
    public function newMessage1(){
        echo "Welcome to our application!!";
    }
}
trait message2{
    public function newMessage2(){
        echo "Bye Bye Thank you for Visiting US!!!!!!";
    }
}

class WelcomeVisitors {
    use message1;
}
class ByeByeVisitors{
    use message1, message2;//you can call traits twice at the same time
}

$visitors_welcome = new WelcomeVisitors();
$visitors_welcome->newMessage1();
echo "<br/>";


$visitors_byebye = new ByeByeVisitors();
$visitors_byebye->newMessage1();
echo "<br/>";
$visitors_byebye->newMessage2();// this will be available becouse we called twice in above
?>