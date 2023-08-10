<?php 
$serverName ="localhost";
$userName = "root";
$dbPassword ="";
$dbName ="animalsdb";
//create a connecction using mysqli object oriented
$conn = new mysqli($serverName,$userName,$dbPassword,$dbName);
if($conn->connect_error){
    echo "Connection Failled!! ===> ".$conn->connect_error;
}

$insertIntoDbQuery = "INSERT INTO cow_table (fullName,ages) values ('nyabyenda gaju',200)";
if($conn->query($insertIntoDbQuery)===TRUE){
    echo "Record Inserted into cow_table Successfully";
}else{
    echo "Failed to save into table cow_table";
}

$conn->close();
?>