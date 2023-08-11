<?php 
$serverName ="localhost";
$userName ="root";
$dbName="animalsdb";
$dbPassword ="";
//create a connection to the database
$conn = new PDO("mysql:host=$serverName;dbname=$dbName",$userName,$dbPassword);
if(!$conn){
    echo "Database connection failed!!";
}else{
    echo "Database Connected Successfully!!";
}

try {
    //code...
    $insert_query = $conn->prepare("INSERT INTO cut_table(firstName,lastName,ages) VALUES(:firstName,:lastName,:ages)");

    $insert_query->bindParam(":firstName",$firstName);
    $insert_query->bindParam(":lastName",$lastName);
    $insert_query->bindParam(":ages",$ages);

    $firstName ="keza";
    $lastName ="winnie";
    $ages =23;
    $insert_query->execute();

    $firstName = "brenda";
    $lastName = "mugisha";
    $ages = 24;
    $insert_query->execute();
    echo "All Data have been Inserted Successfully!";
} catch (PDOException $e) {
    //throw $th;
    echo "There might be an error ==> ".$e->getMessage();

}
$conn = null;
?>