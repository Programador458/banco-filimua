
<?php

    session_start();

    try{
        $pdo = new PDO("mysql:host=localhost; dbname=banco; charset=utf8;", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOexception $e){
        die("Erro conexão ".$e->getMessage());
    }

?>