<html>
    <body>
        <h1>
    <?php
    include("../../components/header.php");
    $day_month_year = date("d/m/y");
    echo ("<br/>we check the time and date like this ");
    echo $day_month_year ;
    echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
echo "How to Display Date and Time";


// echo date_default_timezone_set("American/NewYork");
date_default_timezone_set("America/New_York");
echo "Current Now we are : " . date('h:i:sa');

echo "THIS IS HOW YOU CAN DEFINE YOUR TIME ";

$d=mktime(11, 14, 54, 8, 12, 2014);
echo "<br/>Created date is " . date("Y-m-d h:i:sa", $d);

echo "<br/> strtotime() ";
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d); 


$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+6 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";

//The example below outputs the number of days until 4th of July:

echo "The example below outputs the number of days until 4th of July:";

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";

include("../../components/Footer.php");
    ?>
    </h1>
 </body>
</html>