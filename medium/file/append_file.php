<?php 
$myFile = fopen("testCreate_file.txt","a") or die("File can be edited !!");
$add_third_name = "Rukundo jean de morour";
fwrite($myFile,$add_third_name);
fclose($myFile);
echo "this is the end of the document!!";
?>