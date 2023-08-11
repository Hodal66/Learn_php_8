<?php
$serverName ="localhost";
$userName ="root";
$dbName="animalsdb";
$dbPassword ="";
//create connection to the database

$conn = new mysqli($serverName,$userName,$dbPassword,$dbName);

if($conn->connect_error){
    echo "OPPS!!! Database connection Error!!<br/>".$conn->connect_error;
}else{
    echo "DATABASE connected Successfully!! <br/>";
}
//create a query to retrieve information from the database 

$fetch_record = "SELECT * FROM cut_table";
$result = $conn->query($fetch_record);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "ID : ".$row['id']."First Name : ".$row['firstName']."<b>Last Name : ".$row['lastName']." Ages ".$row['ages']."<br/><br/></b>";
    }
}
else{
    echo ") Record";
}
?>