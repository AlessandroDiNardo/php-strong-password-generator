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

    session_start();

    require_once __DIR__ . "/helper.php";
?>
<body>
    <h1>Strong Password Generator</h1>
    <form method="GET">
        <label for="numchar">Lunghezza Password:</label>
        <input type="text" name="numchar">
        <input type="submit" value="GENERATE">
    </form>

    <?php
        $newPsw = randomPassword($numChar);

        if($newPsw){

            $_SESSION["newpsw"] = $newPsw;
            header('Location: ./psw.php');
        }

    ?>
</body>
</html>