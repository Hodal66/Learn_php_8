<?php 
$serverName ="localhost";
$userName ="root";
$databaseName ="animalsdb";
$databasePassword ="";
//create a connection unsing PDO
try {
    //code...
$conn = new PDO("mysql:host=$serverName; dbname=$databaseName",$userName,$databasePassword);
echo "database connected successfully!!";
//create a query to insert data into cut table

$sql_to_insert_data = "INSERT INTO cut_table(firstName,lastName,ages) VALUES ('ndakuzi','ndabisoje',5)";
$conn->exec($sql_to_insert_data);
echo "Insert Querry OK!!!!!!!!!!!";
} catch (PDOException $e) {
    //throw $th;
    echo "Something Goes wrong!!".$e->getMessage();
}

$conn = null;
?>