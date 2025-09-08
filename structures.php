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
    echo "a(z) {$number} egy {$result} szam"
?>