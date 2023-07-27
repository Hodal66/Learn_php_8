<?php
$number1=900;
$number2 = 3000;
$sum = $number1 + $number2;
function getSum(){
    global $sum;
    echo "<h1> The Sum inside the function is : $sum </h1>";
}
getSum();
echo "<h1>The sum Out side of Function is : !! $sum </h1>";
?>