<?php 
$x = 19_000.09;

var_dump($x);
echo "<br/>";
echo PHP_FLOAT_MAX;

//How to use floor function
echo "<br/>";
$myFloor = floor((0.1+0.7)*10);
echo $myFloor;

//how to use ceil function 
echo "<br/>";
$myCeil = ceil((0.1+0.7)*10);
echo $myCeil;

//How to check infinity number
echo "<br/>";

// echo INF;
echo PHP_FLOAT_MAX*3;

$xvalue = PHP_FLOAT_MAX*2;
echo "<br/>";

var_dump(is_finite($xvalue));
var_dump(is_infinite($xvalue));
var_dump(is_nan($xvalue));

?>