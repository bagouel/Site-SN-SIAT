<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    
    //On essaie de se connecter     
    try{

        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $conn = new PDO("mysql:host=$servername;dbname=snsiat", $username, $password,$pdo_options);
        //On définit le mode d'erreur de PDO sur Exception
        $conn->query("SET NAMES utf8");
        
    }
    catch(Exception $e){
        die( "Erreur PDO dans : " . $e->getMessage());
    }
?>