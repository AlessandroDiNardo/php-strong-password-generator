<?php
    
    $numChar = $_GET["numchar"];

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