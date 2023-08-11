<?php 
$serverName ="localhost";
$userName ="root";
$dbName = "student_info";
$dbPassword = "";

//create a database connection using mysqli
$conn = new mysqli($serverName,$userName,$dbPassword,$dbName);
if($conn->connect_error){
    echo "Database Connection Failed!! <br/>";
}
else{
    echo "Database Connected Successfull!!<br/>";
}
//DATA INITALISATION
$firstName=$lastName=$email=$password=$comfirmPassword="";
$firstName_err = $lastName_err = $email_err=$password_err=$comfirmPassword_err="";


?>