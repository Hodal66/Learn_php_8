<?php
function divisionfunc($divident,$divider){
    if($divider == 0){
        throw new("Divider can't be Zero");
    }
    return $divident/$divider;
} 
try {
    //code...
    
echo divisionfunc(4,0);

} catch (\Throwable $error) {
    //throw $error;
    $my_error_message = $error -> getMessage();
    $my_error_file = $error -> getFile();
    $my_error_line = $error -> getLine();
    $my_error_code = $error -> getCode();
    echo "Division is imposible for file : $my_error_file on line of $my_error_line 
    we ge this code : $my_error_code  our Message id $my_error_message";
}
finally{
    echo "process Complete!!";
}

?>