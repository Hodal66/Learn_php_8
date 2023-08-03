<?php 
function my_callback_fn($item){
    $my_string_length = strlen($item);
    return $my_string_length;
}

$my_collection = ["Jesus", "God is Good","Mana Warakoze","Ayi mana yukuri komeza kunyobora urancishe  munzira yo gukora icyo ushaka"];
$calculate_length = array_map('my_callback_fn',$my_collection);

print_r($calculate_length);

//HOW YOU CAN USE ANONIMOUS FUNCTION

$new_calculate_lenght = array_map(function($item){return strlen($item);},$my_collection);
echo "New Value : ". $new_calculate_lenght;

?>