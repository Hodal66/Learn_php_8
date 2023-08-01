<html>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <h1>Multiplication Table</h1>
     <div>
        <label for="tableNumber">How many Multiplication Table You Want : </label></br>
        <input type="number" name="tableNumber" id="tableNumber">
     </div>
     <div>
        <label for="startTable">Give me starting Point:</label>
        <input type="number" name="startTable" id="startTable">
</div>
<div>
    <label for="endTable">Give Table that you want to End With :</label>
    <input type="number" name="endTable" id="endTable">
</div>
    <div><input type="submit" value="Save Details"></div>
</form>
<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
    $neededTables = $_POST['tableNumber'];
    $startingTable = $_POST['startTable'];
    $endingTable = $_POST['endTable'];
    if(empty($neededTables)&&empty($startingTable)&&empty($endingTable)){
        echo "All field must be filled";
    }else{
        $clientNeededTable = $neededTables;
        for($i=$startingTable;$i<=$endingTable;$i++){
            echo "THIS IS TABLE NUMBER :$i <br/>";
            echo "=================<br/>";
            for($j=1;$j<=12;$j++){

                echo "$i","*","$j","=",$i*$j,"<br/>";
            }

            echo "<hr/>";
        }
    }
}
?>
</body>
</html>