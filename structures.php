<?php

    echo "szia";
    echo "<br>";

    // if else elseif
    // egy szamrol donts el hogy paros e
    $number = 7;
    if($number%2 == 0)
    {
        echo "paros";
    }
    else
    {
        echo "paratlan";
    }
    echo "<br>";
    $result = ($number % 2 == 0) ? "paros" : "paratlan";
    echo "a(z) {$number} egy {$result} szam";
    echo "<br>";

    //switch

    //ciklus: for, while, foreach
    //ciklussal irasd ki 1-10-ig a szamokat
    for ($i=0; $i < 10; $i++) { 
        $out = $i + 1;
        echo "$out <br>";
    }

    //tombok
    //hozz letre egy indexelt tombot 5 gyumolcsel es ird ki
    $fruits = ["apple","banana","strawberry","raspberry","grape"];

    for ($i=0; $i < count($fruits); $i++) { 
        echo "$fruits[$i], ";
    }
    echo "<br>";

    foreach($fruits as $fruit){
        echo "$fruit, ";
    }
    echo "<br>";

    //hozz letre usertombot ami tartalmazza a user nevet es az eletkorat
    $users = [
        "Kiss Pista" => 20,
        "Kiss Éva" => 23,
        "Kiss Géza" => 26,
    ] ;

    foreach ($users as $name => $age) {
        echo"$name : $age <br>";
    }
    echo "<br>";

    $students = [
        ["name" => "Kovács Péter", "age" => 20],
        ["name" => "Kovács Éva", "age" => 20],
        ["name" => "Kovács Géza", "age" => 20]
    ];

    foreach ($students as $student) {
        echo"$student[name] : $student[age]<br>";
    }
    echo "<br>";
    foreach ($students as $student) {
        echo"{$student['name']} : {$student['age']}<br>";
    }
?>