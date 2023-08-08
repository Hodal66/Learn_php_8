<?php
$serverName = "localhost";
$userName ="root";
$dbName="animalsdb";
$dbpassword ="";
//create a connection using mysqli object oriented

$conn = mysqli_connect($serverName,$userName,$dbpassword,$dbName);
//check if connection exist
if($conn->connect_error){
    die("Error Database connection failed :: ".$conn->connect_error);
}

$create_tbl_query = "CREATE TABLE cut_table (id INT(6) AUTO_INCREMENT PRIMARY KEY , firstName varchar(255) NOT NULL, lastName varchar(255) NOT NULL, ages INT(20) , 
updated_reg TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

if($conn->query($create_tbl_query)){
    echo "TABLE created Successfully!!";
}else{
    echo "Creation of table failed!!";
}
//query to create table
?>