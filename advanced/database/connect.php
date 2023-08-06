<?php 
$serverName= "localhost";
$userName = "root";
$password = "";
$dbName ="hodal1db";

// This is a connection to the database

$connection= mysqli_connect($serverName,$userName,$password,$dbName);
if(!$connection){
    echo "Database fail to connect !!";
}else{
    echo "Database connected successfull !!";
}
?>