<?php 
function my_callback_fn($item){
    $my_string_length = strlen($item);
    return $my_string_length;
}

$my_collection = ["banana", "ikawa","ifiritiNzizaCyane","Ayi mana yukuri komeza kunyobora urancishe  munzira yo gukora icyo ushaka"];
$calculate = array_map('my_callback_fn',$my_collection);

print_r($calculate);

?>