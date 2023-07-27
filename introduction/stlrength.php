<html>
<body>
  <h1>
  <?php
  $allWords='Ok you are welcome to my site those are number count';
  $myName ="Muheto Hodal";
  $howToReverse = "umuvure muremure";
  echo "This is how we can check the lenght of any variable !!";
    echo "<br>the Length of Muheto Hodal is :".strlen($myName);
    echo "<br>This is how We count the number of Words inside tje string <br> ";
    echo "<br>Ok you are welcome to my site those are number count ", str_word_count($allWords);
    echo "<br>We can reverse ::____:: ".strrev($howToReverse);
    echo "<br>To Replace ", str_replace("WellDone","Byakozwe neza","Hello WellDone")
  ?>
  </h1>
</body>
</html>