<?php 
$serverName = "localhost";
$userName="root";
$databaseName ="animalsdb";
$databasePassword ="";
//create a connection to the database

$conn = mysqli_connect($serverName,$userName,$databasePassword,$databaseName);
if(!$conn){
    echo "Database conection Failed !!".mysqli_connect_error();
}else{
    echo "Database Connected successfully!!";
}

//create a query to select information from the database

$select_data = "SELECT * from cut_table";
$query = mysqli_query($conn,$select_data);
if(mysqli_num_rows($query)>0){
    while($row=mysqli_fetch_assoc($query)){
        echo "ID : <b> ".$row['id']." </b> First Name :<b> ".$row['firstName']."  </b>Last Name :<b> ".$row['lastName']." Ages ".$row['ages']."<br/><br/></b>";
    }
}else{
    echo "<br/>0 Result!!<br/>";
}

?>