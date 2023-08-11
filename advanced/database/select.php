<?php 
$serverName ="localhost";
$userName ="root";
$dbName ="animalsdb";
$dbPassword ="";
//create a connection using myqli

$conn = new mysqli($serverName,$userName,$dbPassword,$dbName);
if($conn->connect_error){
    echo "<br/>Database connection failed!!";
}else{
    echo "<br/>Database Connection Successfully connected!!!<br/><br/>";
}

$query_fetch = "SELECT * FROM cow_table";
$result = $conn->query($query_fetch);

if($result->num_rows > 0){
    while($row=$result->fetch_assoc()){
        echo " ID : ".$row['id']."  Full Name : ".$row['fullName']." Ages : ".$row['ages']."<br/><br/>";
    }
}
else{
    echo "0 Result";
}

?>