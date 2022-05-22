<?php
    $dsn = 'mysql:host=localhost;dbname=phpPDO';
    $usuario = 'root';
    $senha = 'root';

    try{
        $conexao = new PDO($dsn, $usuario, $senha);

        $query = "
            select * from tb_usuarios where id_usuario = 6 
        ";

        //fetch retorna apenas um registro

        $stmt = $conexao->query($query);
        $lista = $stmt->fetch(PDO::FETCH_ASSOC); // RETORNA ARRAY COM INDICE ASSOCIATIVO
        // $lista = $stmt->fetch(PDO::FETCH_NUM); RETORNA ARRAY COM INDICE DE NUMERO
        // $lista = $stmt->fetch(PDO::FETCH_BOTH); RETORNA ARRAY COM INDICE NUMERO E ASSOCIATIVO
        // $lista = $stmt->fetch(PDO::FETCH_OBJ); RETORNA OBJETO
        echo "<pre>";
        print_r($lista);
        echo "</pre>";

        echo $lista['nome'];


    } catch (PDOException $e){
        echo "Erro: ".$e->getCode() ." Messagem: ".$e->getMessage();
        //registrar erro
    }