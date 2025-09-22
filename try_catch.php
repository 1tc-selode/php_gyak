<?php
    $dataFile = "data.txt";
    $logFile = "log.txt";
    $message = "";
    $error = "";
    try{
        if(file_exists($dataFile)){
            $currentContent = file_get_contents($dataFile);
        } else {
            throw new Exception("A $dataFile nem létezik!");
        }
        if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['newdata'])){
            $new_data = $_POST['newdata'];
            if(file_put_contents($dataFile, $new_data) != false){
                $message = "Sikeres módosítás!";
            } 
        }
    } catch (Exception $ex){
        $error = "Hiba történt: " . $ex->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try catch</title>
</head>
<body>
    <h2>Fájlkezelés</h2>
    <?php if(isset($error) && !empty($error)) ?>
    <p> <?=$error ?> </p>
    <?php if(isset($message) && !empty($message)) ?>
    <h2>A data.txt tartalma</h2>
    <pre><?php echo htmlspecialchars($currentContent)?></pre>
    <h2>Módosítás</h2>
    <form action="" method="post">
        <label for="newdata">új adatok nev kor formatumban</label><br>
        <textarea name="newdata" id="newdata" type="text" cols="30" rows="10">
            <?php echo htmlspecialchars($currentContent) ?>
        </textarea>
        <button type="submit">Mentés</button>
    </form>
</body>
</html>