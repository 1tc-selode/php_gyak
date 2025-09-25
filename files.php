<?php
    if(isset($_POST["submit"])){
        try{
            $uploadFolder = "uploads/";

            $fileName = basename($_FILES["kep"]["name"]);
            $tempFileName = $_FILES["kep"]["tmp_name"];
            $fileSize = $_FILES["kep"]["size"];
            $error = $_FILES["kep"]["error"];
            $fileType = strtolower((pathinfo($fileName, PATHINFO_EXTENSION)));

            $targetFile = $uploadFolder.$fileName;

            //ellenorzes

            //1. hiba a feltoltott fileval
            if($error){
                throw new Exception("hiba a feltoltes soran $error");
            }

            //2. feltoltesi mappa letezese vagy irasa
            if(!is_dir($uploadFolder) || !is_writable($uploadFolder)){
                throw new Exception("a {$uploadFolder} nem letezik vagy nem irhato");
            }

            //3.mar letezik ilyen fajl
            if(file_exists($targetFile)){
                throw new Exception("a {$targetFile} fajl mar letezik");
            }

            //4. nem lehet nagyobb mint 5mb
            if($fileSize > 5000000){
                throw new Exception("tul nagy a fajl merete. max 5mb");
            }

            //5. fajl tipusanak ellenorzese
            if(!in_array($fileType, ["jpg","jpeg","png","gif"])){
                throw new Exception("nemjo a formatum ocsem");
            }

            //fajl athelyezese a temp targetbe
            if(move_uploaded_file($tempFileName, $targetFile)){
                echo "sikeresen feltoltve {$targetFile}";
            } else{
                throw new Exception("hiba tortent az atmozgas soran");
            }
        } catch(Exception $ex){
            echo "hiba tortent {$ex->getMessage()}";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple-v1.css">
</head>
<body>
    <h2>fajl letoltese</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="kép">valasz egy kepet a feltolteshez</label>
        <input type="file" name="kep" id="kep">
        <button type="submit" name="submit">feltoltes</button>
    </form>
</body>
</html>