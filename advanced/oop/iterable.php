<?php
function listOfMyPeaple(iterable $peaples){
    foreach($peaples as $peaple){
        echo $peaple;
        echo "<br/>";
    }
  
}
$listOfpp = ["hodal","muheto","keza","bwiza","samson"];
listOfMyPeaple($listOfpp);
echo "<br/>This is the end of file!! you are welcome to my  house!!";
?>
<?php 
//HOW TO RETURN ITERABLE!!!
function get_all_my_animals():iterable{
    return ["cow","hen","cat","pusy"];
}

$animalsContainer = get_all_my_animals();
foreach($animalsContainer as $myAnimals){
    echo $myAnimals;
    echo "<br/>";
}
?>