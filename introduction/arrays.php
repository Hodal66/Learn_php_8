<?php 
$names = array("Muheto","Hodal","Keza","Umwiza");
foreach($names as $myName){
    echo "$myName <br/>";
}
echo "<hr/>";

//how to use associate array

$fullNames = array("firstName"=>"Hodal","lastName"=>"Hodal","ages"=>"37","MyChildFullName"=>"Umwiza Keza");
foreach($fullNames as $myNames=>$name){
    echo "$myNames=>$name <br/>";
}

// how to sort an array
$myNumbers = array("10","20","1","100");
rsort($myNumbers);
$sortedArray = count($myNumbers);
for($i=0; $i<$sortedArray;$i++){
    echo $myNumbers[$i]."<br/>";
}

?>