<?php 
$serverName ="localhost";
$userName ="root";
$databaseName ="animalsdb";
$databasePassword ="";

// create a connection to the database using PDO
try {
    //code...
    $conn = new PDO("mysql:host=$serverName;dbname=$databaseName",$userName,$databasePassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connection to the database have been successfully done!!";
    $create_table_query = "CREATE TABLE cow_table( id INT(6) AUTO_INCREMENT PRIMARY KEY, fullName varchar(255) NOT NULL, ages INT(20))";
    $conn->exec($create_table_query);
    echo "<br/> Cow Table have been created successfully!!";

} catch (PDOException $e) {
    //throw $th;
    echo "<br/>Something goes Wrong !! ==> ".$e->getMessage();
}
?>