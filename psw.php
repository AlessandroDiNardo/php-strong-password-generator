<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Password</title>
</head>
<style>
     *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body{
        background-color: #3ba42c   ;
        font-family: arial, sans-serif;
    }

    .container{
        max-width: 1000px;
        margin: 0 auto;
        text-align: center;
        padding: 200px 0;
        line-height: 50px;
    }
</style>
<?php
    session_start();

    $newPsw = $_SESSION["newpsw"];
?>
<body>
    <div class="container">
        <?php
                echo "<div> La tua nuova password è:" 
                . "<h1>" . $newPsw . "</h1>" 
                . "</div>";
                echo "<a href='./index.php'>Return to the main page</a>";
            ?>
    </div>
</body>
</html>