<?php
// belepesi pont

// controller 


// Egyszerű autoloader a kód betöltéséhez a mappaszerkezet alapján.
spl_autoload_register(function ($class) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

use Appp\Models\BusinessCard;
use Appp\Services\CardManager;
//use pdo

// Adatbázis config
$dbHost = 'localhost';
$dbName = 'business_cards';
$dbUser = 'root';
$dbPass = '';

try {
    $pdo = new PDO ("mysql:host={$dbHost};dbname={$dbName}",$dbUser,$dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Adatbázis kapcsolat sikeres<br>";
} catch (PDOException $e) {
    die("Adatbázis kapcsolat sikertelen: " . $e->getMessage());
}

?>