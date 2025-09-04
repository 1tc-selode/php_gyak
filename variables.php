<?php
/*
        xampp apache mysql
        git
        github repo
        vsc
        <?php ... ?>
        valtozok angolul
    */ 

    $name = "odett";
    $age = 18;
    $city = "kisuj";
    echo var_dump($name);
    echo "<br>";
    echo "nev: $name eletkor: $age lakohely: $city";

    define("PI",3.14);
    echo "<br>", PI;
    echo "<br>";

    //adattipusok string int float bool array

    $message = "1";
    echo "Kiir", $message, "erteket","<br>\n";
    echo "Kiir $message erteket <br>\n";
    echo "Kiir {$message}darab erteket <br>\n";
    echo 'Kiir {$message}darab erteket <br>\n';
    
    print "Kiir". $message. "erteket"."<br>\n";

    /** 
     * 
     * git init   : helyi repó inicaizalas
     * git add .  : modositott fajlok hozzaadasa a staging areahoz
     * git commit -m "message"  : valtoztatok fajlok commitalasa
     * git remote add origion https....  :hozzarendeljuk a helyi repot a tavoli repohoz
     * git config --global user.name  : ellenorizni v beallitani
     * git config --global user.email : ellenorizni v beallitani
     * git branch -M main : branchben a foagn elnevezese
     * git push -u origin main  : a helyi repo valtozasait feltolti a repora
     * 
     * HF töltsd le otthon a repot a sajat htdocs mappadba
     * 
     * 
    */
?>