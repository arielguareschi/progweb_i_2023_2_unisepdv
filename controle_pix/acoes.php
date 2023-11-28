<?php
    require_once('config/conexao.php');
    if ($_POST){ // quer dizer que esta vindo algo no POST
        if ($_POST['acao'] == 'excluir'){
            // aqui vai os paranaue de excluir
            $sql = "delete from pix where id = :id";
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(':id',$_POST['id'], PDO::PARAM_INT);
            $stmt->execute();
            header('location:index.php');
        } elseif ($_POST['salvar'] == 'salvar'){ // vamos verificar se o ser clicou no botao salvar
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
            header('Location: index.php');
        } else {
            echo "ACESSO INCORRETO!";
        }
    }
    print_r($_POST);

?>
