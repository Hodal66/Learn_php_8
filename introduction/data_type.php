<html>
    <body>
        <h1>
        <?php 
        //this is how string works
        $fullName = "Muheto Hodal";
        echo ("Welcome $fullName you are number one on this site!!<br>");
        //this is how numbers works
        $number1 =9000;
        $number2 = 1000;
        $isGirl =true;
        $myFraction = 30.8990;
        $myArray = array("Hodal","Keza","Bwiza","Muheto");
        $null=null;
        // declare number 
        var_dump($number2);
        //declare string
        var_dump($fullName);
        //declare boolean
        var_dump($isGirl);
        //declare fractions
        var_dump($myFraction);
        //declare array
        var_dump($myArray);
        //how declare null value
        var_dump($null);

        $sumation = $number1+$number2;
        echo ("<br>The sum Between $number1 and $number2 is Equal to $sumation");
        echo $myArray[2];
        // if($i=0;$i<4;$i++){
        //     echo $myArray[$i];
        // }

           /**
            * DATA TYPES AND CASTING
        
         */
        # 4 Scalar Types
          #bool
          #int
          #float
          #string

        # 4 compound Types
          #Array
          #Objects
          #callable
          #iterable
          
        # 2 special types
          #resource
          #null
        ?>

     

        </h1>
</body>
</html>