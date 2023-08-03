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

} catch (\Throwable $th) {
    //throw $th;
    echo "Division is imposible ";
}

?>