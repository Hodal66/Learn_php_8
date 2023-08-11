<?php 
echo "Hello Wahageze naha tugomba kubisoreza!!!";

$first_name = $last_name = $email = $password =$confirm_password ="";
$first_name_err = $last_name_err = $password_err = $email_err =$confirm_password_err="";

$serverName="localhost";
$userName = "root";
$dbName = "student_info";
$dbPassword ="";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["firstName"];
    $last_name = $_POST["lastName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["comfirmPassword"];
if(empty($first_name)&&empty($last_name)&&empty($email)&&empty($password)&&empty($confirm_password)){
    $first_name_err = $last_name_err = $email_err =$password_err =$confirm_password_err ="All Are Required!!";
}else{
    $first_name_err = $last_name_err = $email_err =$password_err =$confirm_password_err ="";
}
//Database configuration
//create a connection to the database
try {
    //code...
    // $query_to_create_database ="CREATE DATABASE student_info";
    
$conn = new PDO("mysql:host=$serverName;dbname=$dbName",$userName,$dbPassword);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// if($conn->exec($query_to_create_database)){
//     echo "Database student_info created <br/>";
// }else{
//     echo "database cration failed!!!!!<br/>";
// }


if(!$conn){
    echo "<br/>Sorry the Database Connection is not correct";
}else{
    echo "<br/>Database connection has been done!! <br/>";
}

// $query_to_create_table = "CREATE TABLE student_y1(Id INT(30) PRIMARY KEY AUTO_INCREMENT, firstName varchar(250) NOT NULL, lastName varchar(250) NOT NULL, email varchar(250) NOT NULL , userPassword varchar(20) NOT NULL , 
// comfirmPassword varchar(20) NOT NULL, date_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

// if($conn->exec($query_to_create_table)){
//     echo "<br/><br/>Table called student_y1 has been createdsuccessfully!!";
// }else{
//     echo "<br/><br/>OOPPPs table creation failed check well and try your query!!";
// }
//Query To insert into the table
$query_to_insert_into_table = "INSERT INTO student_y1(firstName,lastName,email,userPassword,comfirmPassword) 
VALUES ('$first_name','$last_name','$email','$password','$confirm_password')";
if($conn->exec($query_to_insert_into_table)){
    echo "<br/>Query ok data have ben inserted Successfullly";
}else{
    echo "<br/>Opps Query failled to be excuted!!";
}
} catch (PDOException $err) {
    //throw $th;
    echo "OOPS!!!! There was the problems check well ===>".$err->getMessage();
}

}

//query to get data from the database 
// $get_data = "SELECT * FROM student_y1";
// $result = $conn->exec()
?>