<?php 
$serverName ="localhost";
$userName ="root";
$databasePassword= "";
$databaseName ="animalsdb";

///create  a connection to the database using mysqli procedural;;;
$my_conn = mysqli_connect($serverName,$userName,$databasePassword,$databaseName);
//check if the connection have been established

if(!$my_conn){
    echo "<br/>The connection the the database failed ===> ".msqli_connect_error($my_conn);
}

//create a querry to insert data into the database
$query_to_insert_data_into_database ="INSERT INTO cut_table (firstName, lastName, ages) VALUES ('Keza','kazuba',4)";
if(mysqli_query($my_conn,$query_to_insert_data_into_database)){
    echo "<br/>TABLE inserted Query successfully!!";
}
else{
    echo "<br/>Error the insert query doesn't work propery!!";
}
mysqli_close($my_conn);
?>
