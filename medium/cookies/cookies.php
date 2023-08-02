<?php 
session_start();
$cookies_name ="user";
$cookies_value = "MUHETO Hodal";

setcookie($cookies_name,$cookies_value,time()+(8640*30),"/");
?>

<html>
<body>
    <?php 
    echo "Your UserName is : ".$_SESSION['username'];
    echo "<br/> Your UserId : ".$_SESSION['user_id'];
  if(!isset($_COOKIE[$cookies_name])){
    echo "<br/>Cookie named '" . $cookies_name . "' is not set!";
} else {
  echo "<br/>Cookie '" . $cookies_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookies_name];
}
    ?>
</body>
</html>    