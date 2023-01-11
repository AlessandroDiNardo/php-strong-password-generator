<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Password</title>
</head>
<?php
    session_start();

    $newPsw = $_SESSION["newpsw"];
?>
<body>
    <?php
        echo "<div> La tua nuova password è:" 
        . "<h1>" . $newPsw . "</h1>" 
        . "</div>";
        echo "<a href='./index.php'>Return to the main page</a>";
    ?>
</body>
</html>