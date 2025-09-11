<?php

require_once '../classes.php';

// Greeting példa
$user = new Person();
$user->greet("Barátom");

// Logger osztály létrehozása és használata példa
class Logger {
    public function log($message) {
        echo "[LOG]: $message<br>";
    }
}

$logger = new Logger();
$logger->log("Ez egy naplóüzenet.");

?>