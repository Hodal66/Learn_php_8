<?php
$serverName ="localhost";
$userName ="root";
$dbName = "animalsdb";
$dbPassword ="";
//create a coonection to the database

$conn = new mysqli($serverName,$userName,$dbPassword,$dbName);
if($conn->connect_error){
    echo "<br/>Database connection Error ==> ".$conn->connect_error;
}else{
    echo "<br/>Database Connected Successfully!!!<br/>";
}
$insertQuery = $conn->prepare("INSERT INTO cut_table(firstName,lastName,ages) VALUES(?,?,?)");
$insertQuery->bind_param("sss",$fistName,$lastName,$ages);

$fistName ="Hhhhh";
$lastName ="okoko";
$ages =30;
$insertQuery->execute();

$fistName="aaaaaaaaa";
$lastName="ababababa";
$ages =20;
$insertQuery->execute();

$fistName ="bbbbbb";
$lastName="bcbcbcbc";
$ages = 22;
$insertQuery->execute();

echo "<br/>All query Have been Inserted Successfuly";

$insertQuery->close();
$conn->close();




?>