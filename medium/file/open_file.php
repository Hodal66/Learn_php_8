<?php
echo "THIS IS HOW YOU CAN READ INFORMATION ON A GIVEN DOCUMENT <br/>";
$my_document = fopen('edited_file.txt', "r") or die("File can't be opened");
echo fread($my_document, filesize("edited_file.txt")) ;
fclose($my_document);
?>