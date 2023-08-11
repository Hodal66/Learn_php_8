<html>
    <header>
        <title>
            How to table in PHP
</title>
<style>
        /* Define your CSS styles for the table */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</header>

<body>


<?php 
$serverName = "localhost";
$userName ="root";
$dbName ="animalsdb";
$dbPassword ="";
//create a connection to mysqli object

$conn = new mysqli($serverName,$userName,$dbPassword,$dbName);
if($conn->connect_error){
    echo "Database Connection Failed!!".$conn->connect_error;
}else{
    echo "Database Connected Successfully!!";
}

//create a query to retrieve information in the table
$select_info = "SELECT id,firstName,lastName FROM cut_table";
$result =$conn->query($select_info);

if($result->num_rows>0){
    echo "<table><tr><th>ID</th><th>First Name</th><th>Last Name</>";
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row['id']."</td> <td>".$row['firstName']."</td><td>".$row['lastName']."</td></tr>";
    }
}else{
    echo "We have 0 Data in this table";
}
?>

</body>
</html>