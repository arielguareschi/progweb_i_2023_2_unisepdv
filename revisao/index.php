<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão</title>
    <link href="estilo.css" rel="stylesheet" />
    <style>
        .jocasta {
            font-size: 35px;
            text-align: left;
            background-color: #ccc;
        }
    </style>
    <script src="funcoes.js"></script>
</head>
<body>
    <h1 class="jocasta" style="background-color: #000;">Titulo da revisão</h1>
    <p id="tiburso">Texto da revisão</p>
    <hr> <!-- FAZ UMA LINHA HORIZONTAL -->
    <button type="button" onclick="morfar()">Hora de Morfar</button>
    <hr>
    <form method="post" action="?">
        <label for="nome">Nome</label>
        <input type="text" name="nome" placeholder="Nome" />
        <input type="submit" name="enviar" value="Enviar" />
    </form>
    <?php
        if ($_POST){
            //sleep(5);
            // for (VARIAVEL DE CONTROLE INICIADA;
            //      CONDICAO DE LIMITE;
            //      FORMA DE INCREMENTO)
            // PHP
            // VARIAVEL DE CONTROLE INICIADA = $i = 0;
            // CONDICAO DE LIMITE = $i <= 175;
            // FORMA DE INCREMENTO = $i = $i + 1;  -> $i++

            // JAVA
            // VARIAVEL DE CONTROLE INICIADA = int i = 0;
            // CONDICAO DE LIMITE = i <= 175;
            // FORMA DE INCREMENTO = i = i + 1;  -> i++


            for($i=1; $i<=175; $i++){
                echo $_POST['nome'];
            }
        }
    ?>
</body>
</html>