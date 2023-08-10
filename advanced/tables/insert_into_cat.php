<?php 
$serverName ="localhost";
$userName ="root";
$databaseName ="animalsdb";
$databasePassword ="";

//create a connection to the database

$conn = new mysqli($serverName,$userName,$databasePassword,$databaseName);
if($conn->connect_error){
    echo "Database Connection Error ==> ".$conn->connect_error;
}

//create a query to insert data into cut table

$insert_into_cut_table = "INSERT INTO cut_table ( firstName, lastName, ages) VALUES ('Injangwe1','Tuziranye',20)";
if($conn->query($insert_into_cut_table)){
    echo "Table called Cut table have been inserted query successfully";
}else{
    echo "Error Inserting data into table failed!!";
}

$conn->close();
?>