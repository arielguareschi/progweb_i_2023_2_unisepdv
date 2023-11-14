<?php
session_start();
require('configs/funcoes.php');
if (!validaLogin()) {
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de jogos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <?php include('base/topo.php');?>
    <div class="container-fluid">
        <?php 
            if (isset($_GET['conteudo'])){
                // tem algo tentando carregar
                $caminho = explode("_", $_GET['conteudo']);
                if (count($caminho) == 2){
                    $arquivo = "formularios/" . $caminho[0] . "/". $caminho[1] . ".php";
                    if (file_exists($arquivo)){
                        require_once($arquivo);
                    } else {
                        echo "<h1>CAMINHE INCORRETE!</h1>";    
                    }
                } else{
                    echo "<h1>CHAVE INCORRETA!</h1>";
                }
            } else {
                echo "<h1>Seja bem-vindo</h1>";
            }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>