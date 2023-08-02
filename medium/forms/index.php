<html>
<style>
    form{
    background:#333;
    color:#fff;
    margin: auto;
    padding: 100px;
}
div{
    margin:20px 0px;
}
span{
    color:#e33;
}
</style>
<body>
    <?php 
    $firstNameErr = $lastNameErr = $agesErr=$genderErr="";
    $firstNameValue = $lastNameValue = $agesValue = $genderValue = "";
    function test_input($data){
        $trim_data = trim($data);
        $striped_data = stripcslashes($trim_data);
        $encripted_data = htmlspecialchars($striped_data);
        return $encripted_data;
     }
    if($_SERVER["REQUEST_METHOD"] == "POST"){

     $my_first_name = test_input($_POST['firstName']);
     $my_last_name = test_input($_POST['lastName']);
     $my_ages = test_input($_POST['ages']);
    //  $my_gender = test_input($_POST['gender']);
      if(empty($_POST['firstName'])){
         $firstNameErr = "Your First Name is must!!!";
      }else{
        if(!preg_match("[/^a-zA-Z-]$/")){
            $firstNameErr ="Special chars are not allowed!!";
        }else{
            $lastNameValue =$my_first_name;
        }
      };
      if(empty($_POST['lastName'])){
         $lastNameErr = "your Last Name is must";
      }else{
        if(!preg_match("[/^a-zA-Z-]$")){
            $lastNameErr ="Only letters and white space allowed";
        }else{
            $lastNameValue = $my_last_name;
        }
      };
      if(empty($_POST['ages'])){
         $agesErr = "Your Ages is Reuired";
    }else{
    $agesValue =$my_ages;
   };
   if(empty($_POST['gender'])){
    $genderErr = "you must choose any food";
   }else{
    $genderValue = $my_gender;
   };

   if(empty( $lastNameValue)&&empty($my_ages)&&empty($my_last_name)){
    echo "<p>All input are required </p>";
}else{
  echo "Hello  $lastNameValue $lastNameValue your Ages are : $genderValue";  
}
}
 ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <div>
            <label for="fname">First Name</label>
            <input type="text" name="firstName" id="fname">
            <div><span><?php echo $firstNameErr ?> </span></div>
        </div>
        <div>
            <label for="lname">Last Name</label>
            <input type="text" name="lastName" id="lname">
            <div><span><?php echo $lastNameErr ?> </span></div>


        </div>
        <div>
            <label for="ageId">Ages:</label>
            <input type="number" name="ages" id="ageId">
            <div><span><?php echo $agesErr ?> </span></div>
        </div>

        <div>
            <h1> Select what you like!!!</h1>
            <div>

            </div><input type="radio" name="gender" id="eggs">
            <label for="eggs">Eggs</label>
        </div>
        </div><input type="radio" name="gender" id="meat">
        <label for="meat">Meat</label>
        </div>
        </div><input type="radio" name="gender" id="Milk">
        <label for="Milk">Milk</label>
        </div>
        </div><input type="radio" name="gender" id="Avocado">
        <label for="Avocado">Avocado</label>
        </div>
        <div><span><?php echo $genderErr ?></span></div>
        </div>
        <div><input type="submit" value="Save Details"></div>
    </form>
  
</body>

</html>