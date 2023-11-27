<?php
    require_once("config/conexao.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de PIX</title>
</head>
<body>
    <h1>Controle de PIX</h1>
    <fieldset>
        <legend>Formulário</legend>
        <form action="acoes.php" method="post">
            <label for="id">ID:</label>
            <input type="text" name="id" 
                id="id" placeholder="ID"
                size="10"/><br />
            
            <label for="favorecido">Favorecido:</label>
            <input type="text" name="favorecido" 
                id="favorecido" 
                placeholder="Favorecido"
                size="40"/><br />
            
            <label for="chave">Chave PIX:</label>
            <input type="text" name="chave" 
                id="chave" 
                placeholder="Chave PIX"
                size="40"/><br />
            
            <label for="valor">Valor:</label>
            <input type="number" name="valor" 
                id="valor" 
                placeholder="Valor"
                size="20"/><br />
            <button type="submit" name="salvar" value="salvar">Salvar</button>
            <button type="button" name="novo">Novo</button>
        </form>
    </fieldset>
    <br />
    <hr>
    <br />
    <fieldset>
        <legend>Dados</legend>
        <table border="1" style="width: 100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Favorecido</th>
                    <th>Valor</th>
                    <th>Chave</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "select * from pix";
                    $stmt = $conexao->prepare($sql);
                    $stmt->execute();
                    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach($resultados as $pix){
                        ?>
                        <tr>
                            <td><?php echo $pix['id']; ?></td>
                            <td><?php echo $pix['favorecido']; ?></td>
                            <td><?php echo $pix['valor']; ?></td>
                            <td><?php echo $pix['chave']; ?></td>
                            <td>BTN EDITAR | BTN EXCLUIR</td>
                        </tr>
                        <?php
                    }  
                ?>
            </tbody>
        </table>
    </fieldset>

</body>
</html>