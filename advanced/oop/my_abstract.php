<?php
abstract class Animals{
abstract protected function checkName($name):string;
}

class MamasFamily extends Animals{
    public function checkName($name):string{
        if($name =="gikoko"){
            $values= "Yegoko Mana urigikoko witwa => {$name}";
        }else{
            $values= "Rata Woe ntabwo urigikoko witwa => {$name}";
        }
        return "<br/>".$values;
    }
}

$my_animal = new MamasFamily("gikoko");
$my_animal2 = new MamasFamily("gikoko");
echo $my_animal->checkName("gikoko");
echo $my_animal2->checkName("Ihene");

?>