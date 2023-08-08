<?php
$serverName = "localhost";
$userName = "root";
$databasePassword="";
//querry to create database connection 
// $my_connection = new mysqli($serverName,$userName,$databasePassword);
// if($my_connection->connect_error){
//    die("Connection to database failed". $my_connection->connect_error);
// }
// $create_database_query ="CREATE DATABASE mystudents";
// if($my_connection->query($create_database_query)===TRUE){
//     echo "Database Created Successfully";
// }else{
//     echo "Database Failed".$my_connection->error;
// }

//create a connection using mysqli procedule

// Create connection
$conn = mysqli_connect($serverName, $userName, $databasePassword);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
?>