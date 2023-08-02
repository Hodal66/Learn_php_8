<?php 
//how to validate Email
$email = "mhthodol@gmail$$.com";
$preferedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);

if(filter_var($preferedEmail, FILTER_VALIDATE_EMAIL)){
    echo "Your Email is corect !";
}else{
    echo "your Email is not correct!! ";
}

//How to validate hrl

$my_url = "https://hodalsport.vercel.app";
if(filter_var($my_url, FILTER_VALIDATE_URL)){
    echo "Your URL is Correct you can proceed!!!";
}else{
    echo "Nooooo your URL is not correct!!";
}

//HOW TO REMOVE UNNESSARY STRING

$my_own_string = "<h2>Hello welcome to the timtomaviation <> </h2>";

echo "Actual String is this : ". $my_own_string;

$new_string_filtered = filter_var($my_own_string, FILTER_SANITIZE_STRING);

echo "<br/> New Filtered String : " . $new_string_filtered;

//HOW TO VALIDATE INTEGER

$my_integer_number = 100;
$new_integer_filtered = filter_var($my_integer_number, FILTER_VALIDATE_INT);
if($new_integer_filtered == is_int($my_integer_number)){ //make a comparison
    echo "<br/>Filtered Integer is Integer ";
}else{
    echo "<br/> Filtered Integer is not Not Not Integer Why !!!!??";
}

//HOW TO VALIDATE THE IP ADDRESS

$my_ip_address = "127.0.0.100.22";

$new_ipAddress_filtered = filter_var($my_ip_address, FILTER_VALIDATE_IP);
if(!$new_ipAddress_filtered === false){
    echo "</br>Now your IP Address is perfect true";
}else{
    echo "</br>your IP Address is not correct Please try Again!!";
}
?>