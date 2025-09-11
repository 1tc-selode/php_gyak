<?php

//keszits egy fgvv  ami atvesz egy string tombot es visszadja a nagybetus valtozatot
function capitalizeAll(array $names): array {
    /*$tempArray = [];
    foreach($names as $name){
        $tempArray[] = mb_strtoupper($name);
    }
    return $tempArray;*/
    return array_map('mb_strtoupper', $names);
}

$names = ["Pista", "Jozsi", "Anna"];

$capitalizedNames = capitalizeAll($names);

print_r($capitalizedNames);

?>