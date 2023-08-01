<?php 
//There is how we can use strict mode 
// declare(strict_types=1);
?>
<h1>
<?php


function addTwoNumber(int $x, int $y){
    var_dump($x,$y);
    echo "<br />";
    return $x + $y;
}
function subThreeNumbers(int $number1, float $number2, int $number3){
    var_dump($number1,$number2,$number3);
    echo "<br />";
    return $number1-$number2-$number3;

}
$sum = addTwoNumber(400,'800');
$substract = subThreeNumbers(400,40.90,300);
echo "The sum of two numbers are : ", $sum ," the substraction of two numbers are : ",$substract;

//how to use default parameter
function displayingNames(string $fullNames="Muheto Hodal", int $ages=30){
    echo "<br/>Wellcome $fullNames , You have $ages years Old  ";
}

displayingNames();
displayingNames("Umwiza gaela",9);

//you can write the function and specify the return type

function calculateMoney(float $x, float $y):int {
    $sum = (int)($x + $y);
    echo "value of $x and $y is equal to $sum";
    return $x + $y;
}
calculateMoney(3.9,40.4);
?>
</h1>