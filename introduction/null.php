<?php
//How we can declare null function 

$x = null;

var_dump(is_null($x));
echo $x;

//also you can use triple equal;
$xxval = null;
var_dump($xxval===null);

//when the value has been not defined the error will be null (Undefined variable )

// var_dump($number1);

//we can also use the function of Unset() to make variable null

$numberx = 20;
var_dump($numberx);
echo "<br/>";
unset($numberx); // this will make variable empty
// var_dump($numberx);

//We can also cast them to any datatype we want

$anyValue = null;

// var_dump($anyValue);
echo "<br/>",var_dump((int)($anyValue));//for Integer
echo "<br/>",var_dump((float)($anyValue));//for float
echo "<br/>",var_dump((array)($anyValue));//for array
echo "<br/>",var_dump((Object)($anyValue));//for Object
?>