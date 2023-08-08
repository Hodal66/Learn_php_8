<?php 
$userName="root";
$databasePassword ="";
$serverName ="localhost";

//create a connection using pdo

try {
    //code...
$conn = new PDO("mysql:host=$serverName",$userName,$databasePassword);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//create database query
$my_query = "CREATE DATABASE new_database_pdo";
$conn->exec($my_query);
echo "<br/> database created Succefully";
} catch (PDOException $err) {
echo "<br/> Database failed to be created " .$err->getMessage();
}

?>
