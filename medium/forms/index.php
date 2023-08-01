<html>

<body>
    <?php 
    $firstNameErr = $lastNameErr = $agesErr=$genderErr="";
    $firstNameValue = $lastNameValue = $agesValue = $genderValue = "";
    
    if($_REQUEST["REQUEST_METHOD"] == "POST"){
        $my_first_name = test_input($_POST['firstName']);
        $my_last_name = test_input($_POST['lastName']);
        $my_ages = test_input($_POST['ages']);
        $my_gender = test_input($_POST['food']);

 function test_input($data){
    $trim_data = trim($data);
    $striped_data = stripcslashes($trim_data);
    $encripted_data = htmlspecialchars($striped_data);
    return $encripted_data;
 }

      if(empty($_POST['firstName'])){
         $firstNameErr = "Your First Name is must!!!";
      }else{
         $lastNameValue ="FirstName";
      };
      if(empty($_POST['lastName'])){
         $lastNameErr = "your Last Name is must";
      }else{
         $lastNameValue = "LastName";
      };
      if(empty($_POST['ages'])){
         $agesErr = "Your Ages is Reuired";
    }else{
    $agesValue = "Ages";
   };
   if(empty($_POST['food'])){
    $genderErr = "you must choose any food";
   }else{
    $genderValue ="gender was selected";
   };
}
    ?>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
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
            <h1> Selsct what you like!!!</h1>
            <div>

            </div><input type="radio" name="food" id="eggs">
            <label for="eggs">Eggs</label>
        </div>
        </div><input type="radio" name="food" id="meat">
        <label for="meat">Meat</label>
        </div>
        </div><input type="radio" name="food" id="Milk">
        <label for="Milk">Milk</label>
        </div>
        </div><input type="radio" name="food" id="Avocado">
        <label for="Avocado">Avocado</label>
        </div>
        <div><span><?php echo $genderErr ?></span></div>
        </div>
        <div><input type="submit" value="Save Details"></div>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $myFirstName = $_POST['firstName'];
        $myLastName = $_POST['lastName'];
        $myAges = $_POST['ages'];
        if(empty($myFirstName)&&empty($myAges)&&empty($myLastName)){
            echo "<p>All input are required </p>";
        }else{
          echo "Hello $myFirstName $myLastName your Ages are : $myAges";  
        }
    }
     ?>
</body>

</html>