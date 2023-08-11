<?php 
$serverName ="localhost";
$userName ="root";
$databaseName ="animalsdb";
$databasePassword="";
//create a connection to the database

$conn = new mysqli($serverName,$userName,$databasePassword,$databaseName);
if($conn->connect_error){
    echo "<br/> Database Connection Failed".$conn->connect_error;
}else{
    echo "<br/>Database connected Successfully";
}

//create a query to insert data into the table
  // prepare and bind
  $stmt = $conn->prepare("INSERT INTO cow_table(fullName,ages) VALUES(?,?)");
  $stmt->bind_param("ss",$fullName,$ages);
  
  // set parameters and execute
  $fullName = "John";;
  $ages=20;
  $stmt->execute();

  $fullName = "Mary"; 
  $ages=20; 
  $stmt->execute();
  
  $fullName = "Julie";
  $ages=20;
  $stmt->execute();
  
  echo "New records created successfully";
  
  $stmt->close();
  $conn->close();
  ?>

?>