<?php
    session_start();
    if ($_POST){
        if ($_POST['enviar'] == "Acessar"){
            // faria a conexao com o banco e 
            // validaria o login no 
            // banco de dados
            if ($_POST['email'] == "admin@admin.com" && 
                $_POST['senha'] == "admin"){
                // acesso permitido
                $_SESSION['login'] = $_POST['email'];
                header("Location:index.php");
            } else {
                // acesso negado
                header("Location:login.php?error=Acesso Negado");
            }
        }
    }
?>