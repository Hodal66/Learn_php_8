<?php

$x = 5;
echo $x;
//default mathematical variable declared 
$x = PHP_INT_MAX;

var_dump($x);

$y = PHP_INT_MAX + 1 ;
echo "<br/>";
var_dump($y); 

//how to caster from any data type;

$anyValue = (int) "8.9098";
echo "any value ", $anyValue,"<br/>";
var_dump($anyValue);

//how do we declare long number 

$longNumber = (int)"300_000_000";
echo "the longest number is displayed like this :", $longNumber;

