<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/897e5eb927.js" crossorigin="anonymous"></script>
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
        padding: 200px 20px;
        line-height: 50px;
    }

    h1{
        color: white;
    }

    a{
        border: none;
        padding: 5px;
        border-radius: 50%;
        background-color: white;
        color: #3ba42c;
    }

    a:hover{
        cursor: pointer;
        background-color: #3ba42c;
        color: white;
        border: 1px solid #3ba42c;
        transition: 0.7s ease-in-out;
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
        ?>
        
        <div>Click to return to the main page</div>
            
        <a href='./index.php'>
            <i class='fa-solid fa-rotate-left'></i>
        </a>
    </div>
</body>
</html>