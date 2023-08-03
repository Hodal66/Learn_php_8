<?php 
$my_cars=array("Volvo","Calina","Move");
$my_students = array("firstName"=>"Hodal","lastName"=>"Hodal","ages"=>30);
$my_cars_json_encoded = json_encode($my_cars);
echo $my_cars_json_encoded;
echo json_encode($my_students);

// HOW CAN WE DECODE JSON DATA
$json_data ='{"Peter":35,"Ben":37,"Joe":43}';

echo "<br/><br/>DECODED DATA ARE NOW AVERABLE HERE<br/><br/>";

var_dump(json_decode($json_data, true));
$new_data_decoded = json_decode($json_data);

echo "<br/>Peter Detail : ".$new_data_decoded -> Peter;
echo "<br/>Ben Detail : ". $new_data_decoded -> Ben;
echo "<br/>Joe Detail : ".$new_data_decoded -> Joe;

//HOW TO USE PHP ASSOCIATIVE ARRAY

$json_associative_array = '{"firstName":"Muheto", "lastName":"Hodal","Ages":30}';
$json_associative_decoded = json_decode($json_associative_array);
echo "<br/>FirstName : ".$json_associative_decoded->firstName;
echo "<br/>LastName : ".$json_associative_decoded->lastName;
echo "<br/>Ages : ".$json_associative_decoded->Ages;

//HOW TO LOOP VALUES OF ASSOCIATION ARRAY!!!!

$my_students = '{"firstName":"Hodal","lastName":"MUHETO","ages":20}';
$my_students_decoded = json_decode($my_students);
foreach($my_students_decoded as $key=>$value){
    echo $key . " => " . $value . "<br>";
}

?>