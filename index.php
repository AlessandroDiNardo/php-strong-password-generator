<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

</style>
<?php

    $numChar = $_GET["numchar"];

    // funzione per generare la psw
    function randomPassword($numChar) {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //variabile pass dichiarata come array
        $alphaLength = strlen($alphabet) - 1; //lunghezza dell'alfabeto - 1 per poi capovolgerla in stringa
        for ($i = 0; $i < $numChar; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //trasforma l'array in stringa
    }
?>
<body>
    <h1>Strong Password Generator</h1>
    <form method="GET">
        <label for="numchar">Lunghezza Password:</label>
        <input type="text" name="numchar">
        <input type="submit" value="GENERATE">
    </form>

        <?php
           if($numChar !== false) {
                echo randomPassword($numChar);
           }
        ?>
</body>
</html>