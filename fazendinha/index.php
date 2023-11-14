<?php
    echo "<pre>";
    print_r($_GET);
    if(isset($_GET['id'])){
        // passou um id
        echo "ID: " . $_GET['id'];
    } else {
        // nao passou o id
        echo "Voce nao passou nenhum id!";
    }
    echo "OPERACAO: " . $_GET['operacao'];
    echo "</pre>";


    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "fazendinha";
    $porta = "3306";

    $strcon = "mysql:host=" . $servidor;
    $strcon .= ";dbname=" . $database;
    $strcon .= ";port=" . $porta;

    try {
        $conexao = new PDO($strcon, $usuario, $senha);
        $conexao->setAttribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);
        echo "Conectado com sucesso";
        // localhost/progweb_dv2023_2/fazendinha

        $sql = "SELECT * FROM plantacao";
        $stmt = $conexao->prepare($sql);
        $stmt->execute();

        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo "Inicio dos dados:";
        print_r($resultado);
        foreach ($resultado as $linha){
            echo "ID: ".$linha['id'];
            echo "Nome: ".$linha['descricao'];
        }

        $res2 = $stmt->fetchAll(PDO::FETCH_OBJ);
       // print_r($res2);

        // forma vulneravel de sql injection
        $descricao = "Joana D'Arc";
        $ano = 2023;
        $novoPlantio = "insert into plantacao ";
        $novoPlantio .= "(descricao, ano) ";
        $novoPlantio .= "VALUES ";
        $novoPlantio .= '("'.$descricao.'", '.$ano.')';
        $conexao->exec($novoPlantio);

        // forma com validacao para prevencao
        $maisUmPlantio = "insert into plantacao ";
        $maisUmPlantio .= "(descricao, ano)";
        $maisUmPlantio .= "VALUES ";
        $maisUmPlantio .= "(:descricao, :ano)";
        $stmt2 = $conexao->prepare($maisUmPlantio);
        $stmt2->bindParam(':descricao', 
                         $descricao, 
                         PDO::PARAM_STR);
        $stmt2->bindParam(':ano', $ano, PDO::PARAM_INT);
        $stmt2->execute();
        
        $ultimoId = $conexao->lastInsertId();
        echo "<br>Ultimo inserido: ".$ultimoId."<br>";


        // fazer para que altere a descricao e o campo
        // ativo da plantacao de id 10
         
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
?>