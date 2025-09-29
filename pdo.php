<?php

/**
 * CRUD: CREATE READ UPDATE DELETE
 * 
 * tfh: van egy cards tablam amiben van name email es id mezo
 * 
 * backtick `
 * 
 * 1. mysql
 * - READ: SELECT name, email FROM cards WHERE id=10;
 * - CREATE: INSERT INTO cards (`name`, `email`) VALUES ('tibi','tibi@mzsrk.hu');
 * - UPDATE: UPDATE cards SET email = 'tibi2004@mzsrk.hu' WHERE id = 10;
 * - DELETE: DELETE FROM cards WHERE id = 10;

*/
/*
CREATE DATABASE businesscards;

use businesscards;

CREATE table cards(
    `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    `companyName` VARCHAR(100) DEFAULT NULL,
    `phone` VARCHAR(20) DEFAULT NULL,
    `email` VARCHAR(100) DEFAULT NULL,
    `photo` VARCHAR(255) DEFAULT NULL,
    `status` VARCHAR(20) DEFAULT NULL,
    `note` TEXT DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;
 */

//data source name
$dsn = 'mysql:host=localhost;dbname=businesscards;charset-utf8';
$user = 'root';
$pass = '';

try{
    $pdo = new PDO($dsn, $user, $pass);

    //Hiba mód : exception dobasa hiba eseten;
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "sikeres kapcs";
} catch(PDOException $ex){
    echo "kapcs hiba {$ex->getMessage()}";
    exit();
}

$name="odett";
$companyName="idk";
$phone="06205667898";
$email="valami@gmail.com";
$photo=null;
$note="webfejleszto";

//$sql = "INSERT INTO cards(`name`,companyName,phone,email,photo,note)
//        VALUES ('$name','$companyName','$phone','$email','$photo','$note')";

//$pdo->exec($sql);

$sql = "INSERT INTO cards(`name`,companyName,phone,email,photo,note)
        VALUES (?,?,?,?,?,?)";

$stmt = $pdo->prepare($sql);

$stmt->execute([$name,$companyName,$phone,$email,$photo,$note]);


/*$sql = "SELECT * FROM cards WHERE id=11";

$result = $pdo->query($sql);
$card = $result->fetch(PDO::FETCH_ASSOC);
echo "<br>";
print_r($card);*/

?>