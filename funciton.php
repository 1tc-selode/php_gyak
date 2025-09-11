<?php

    /*
        fgv definialasa parameterek visszateresimertek
    */

    //irj egy fgv ami ket szamot osszead es visszater az osszeggel
    function sum(int $a, int $b): int{
        return $a + $b;
    }

    $s1 = sum(5,3);
    echo "{$s1} <br>";
    $s2 = sum("5","3");
    echo "{$s2} <br>";

    function sayHello($name){
        return "Hello, $name!";
    }

    echo sayHello("Pista");
    echo "<br>";
?>