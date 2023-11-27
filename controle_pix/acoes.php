<?php
    require_once('config/conexao.php');
    if ($_POST){ // quer dizer que esta vindo algo no POST
        // vamos verificar se o ser clicou no botao salvar
        if ($_POST['salvar'] == 'salvar'){
            if (empty($_POST['id'])){
                // VAI FAZER O INSERT
                $sql = "INSERT INTO pix 
                (favorecido, chave, valor) 
                VALUES
                (:favorecido, :chave, :valor)";
                $stmt = $conexao->prepare($sql);
                $stmt->bindParam(':chave', $_POST['chave'], PDO::PARAM_STR);
                $stmt->bindParam(':valor', $_POST['valor']);
                $stmt->bindParam(':favorecido', $_POST['favorecido'], 
                    PDO::PARAM_STR);
                $stmt->execute();
            } else {
                // VAI FAZER O UPDATE
                $sql = "
                UPDATE pix 
                SET favorecido = :favorecido,
                    valor = :valor,
                    chave = :chave
                WHERE id = :id";
                $stmt = $conexao->prepare($sql);
                $stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
                $stmt->bindParam(':chave', $_POST['chave'], PDO::PARAM_STR);
                $stmt->bindParam(':valor', $_POST['valor']);
                $stmt->bindParam(':favorecido', $_POST['favorecido'], 
                    PDO::PARAM_STR);
                $stmt->execute();
            }
        } else {
            echo "ACESSO INCORRETO!";
        }
    }
    print_r($_POST);

?>
