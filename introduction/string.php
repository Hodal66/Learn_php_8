<?php
/**What we can know about string  */
$name = "Muheto Hodal";
echo "My name is $name ,<br/>";
$replaceAtoI = $name[10];
echo "The replaced world will be $replaceAtoI <br/>";
$name[10] = "I";
echo "the replaced word now is $name <br/>";
echo $name[3];

//Heredoc (this works as double quote)
$xValue =9000;
$yValue =1000;
$defaultText = <<<TEXT
<br>line 1, $xValue
line 2, $yValue
line 3
TEXT;
echo nl2br($defaultText);

//Nowdoc (this works as single quote)

$myText = <<<'TEXT'
Line 1, $xValue
line 2, $yValue
TEXT;

echo "<br/>my Next Example is <br/> ",nl2br($myText);
?>