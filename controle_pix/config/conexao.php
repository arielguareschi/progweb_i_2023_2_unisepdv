<?php
    require_once "db.inc";

    $strcon = "mysql:host=" . $dbhost;
    $strcon .= ";dbname=" . $dbname;
    $strcon .= ";port=" . $dbport;

    try{
        $conexao = new PDO($strcon, $dbuser, $dbpass);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, 
            PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e){
        echo "Error: " . $e->getMessage();
        $conexao = null;
    }

?>