<?php 
$serverName ="localhost";
$userName = "root";
$dbPasswod ="";
$dbName ="animalsdb";

//create a conection to this database
// $my_connection = mysqli_connect($serverName,$userName,$dbPasswod,$dbName);
// if(!$my_connection){
//     echo "Database connection failed";
// }else{
//     echo "Database connected successfully!!" ;
// }

try {
    //code...
    $connect_using_pdo = new PDO("mysql:host=$serverName; dbname=$dbName",$userName,$dbPasswod);
    $connect_using_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Database successfully completed";
} catch (PDOException $error) {
    //throw $th;
    echo "Database connection Error ====> " .$error->getMessage();
}
?>