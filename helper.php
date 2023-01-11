<?php
    
    $numChar = $_GET["numchar"];

    // funzione per generare random psw
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

    // funzione che controlla che il numero di caratteri inseriti sia maggiore di 8 e minore di 15, nel caso fosse minore non stampa psw
    function validatePassword($numChar) {

        if($numChar < 8 || $numChar > 15) {
            return "";
        }

        return randomPassword($numChar);
    }
?>