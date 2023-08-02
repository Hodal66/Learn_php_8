<?php
$my_file = fopen('testCreate_file.txt','w') or die("File opened faired!!!");
$welcome_note ="Welcome to my Site !! \n";
echo "<br/>";
$my_firstName ="MUHETO Hodal \n";
fwrite($my_file,$welcome_note);
fwrite($my_file,$my_firstName);
$my_lastName = "Keza Adelphine!!!";
fwrite($my_file,$my_lastName);
fclose($my_file);
echo "End of File!!";
?>