<?php 
$serverName = "localhost";
$userName ="root";
$databaseName = "hodal1db";
$databasePassword ="";

//database connection throught PDO
try {
    //code...
$myConnection = new PDO("mysql:host=$serverName;dbname=$databaseName",$userName, $databasePassword);
$myConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Database connected Successfully!!!";
} catch (PDOException $e) {
echo "Connection failed" .$e;
}

?>