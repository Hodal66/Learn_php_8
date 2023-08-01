<?php 
$number1 =90;
$number2 = 100;
function addGlobalNumbers(){
$GLOBALS['SumOfTwoNumbers'] = $GLOBALS['number1'] + $GLOBALS['number2'];
}

addGlobalNumbers();
echo $SumOfTwoNumbers;
//How to use _SERVER
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];

?>
<!-- How to use $_REQUEST global -->
<!-- <html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" >
            <div>
                <label for="ages">Enter your Ages</label>
                <input type="text" name="myAges" id="ages">
                <input type="submit" value="Send my Ages">
            </div>

            <?php 
            if($_SERVER["REQUEST_METHOD"] == "POST"){

                $myAges = $_REQUEST['myAges'];

                if(empty($myAges)){
                    echo "Please Enter your Age!!";
                }else{
                    echo "your Ages are $myAges";
                }
            }
            ?>
 
</form>
</body> -->

</html>

<html>
<html>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?> " method="POST">
<div>
    <label for="numberID">Enter Your Full Name:</label>
    <input type="text" name="fname">
</div>
<input type="submit" value="Show Me My Names">

</form>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['fname'];
    if(empty($name)){
        echo "Your Names must not be equal to 0";
    }else{
        echo "Welcome $name We are Happy For you !!";
    }

}
?>

</body>
</html>