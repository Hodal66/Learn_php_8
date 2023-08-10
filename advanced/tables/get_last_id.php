<?php 
$serverName ="localhost";
$userName ="root";
$databaseName ="animalsdb";
$databasePassword ="";

//create a connection to the database using mysqli object oriented;;;
$conn = new mysqli($serverName,$userName,$databasePassword,$databaseName);
if($conn->connect_error){
    echo "Error connection failed".$conn->connect_error;
}
//create a query to insert data into the database
$query_to_insert_data_into_db = "INSERT INTO cut_table(firstName,lastName,ages) VALUES ('bebe','maxi',10)";
if($conn->query($query_to_insert_data_into_db)===TRUE){
    $last_id = $conn->insert_id;
    echo "<br/> OOOOOOK Query inserted into the database successfully!!!";
    echo "<br/> The Last ID is ".$last_id;
}else{
    echo "oops!! INSERT query failed check well!! ".$conn->error;
}

$conn->close();

?>