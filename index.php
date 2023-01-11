<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/897e5eb927.js" crossorigin="anonymous"></script>
    <title>Strong Password Generator</title>
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

    form{
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
    }

    .box-num{
        padding: 10px 25px;
        text-align: center;
        font-size: 12px;
        border: 1px solid white;
        border-radius: 5px;
    }

    .btn-gen{
        border: 1px solid white;
        border-radius: 5px;
        padding: 5px 15px;
        background-color: white;
        color: #3ba42c;
    }

    .btn-gen:hover{
        cursor: pointer;
        background-color: #3ba42c;
        color: white;
        border: 1px solid black;
    }

</style>
<?php

    session_start();

    require_once __DIR__ . "/helper.php";
?>
<body>
    <div class="container">
        <h1>Strong Password Generator</h1>
            <form method="GET">
                <label for="numchar">Choose password length:</label>
                <input type="text" name="numchar" placeholder="min 8 chars..." class="box-num">
                <button value="GENERATE" class="btn-gen">
                    <i class="fa-solid fa-paper-plane"></i>
                </button>
            </form>

            <?php
                $newPsw = validatePassword($numChar);

                if($newPsw){

                    $_SESSION["newpsw"] = $newPsw;
                    header('Location: ./psw.php');
                }

            ?>
    </div>
</body>
</html>