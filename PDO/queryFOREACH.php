<?php
    $dsn = 'mysql:host=localhost;dbname=phpPDO';
    $usuario = 'root';
    $senha = 'root';

    try{
        $conexao = new PDO($dsn, $usuario, $senha);

        $query = "
            select * from tb_usuarios
        ";

        $stmt = $conexao->query($query);
        $lista = $stmt->fetchAll(PDO::FETCH_ASSOC); // RETORNA ARRAY COM INDICE ASSOCIATIVO
        // $lista = $stmt->fetchAll(PDO::FETCH_NUM); RETORNA ARRAY COM INDICE DE NUMERO
        // $lista = $stmt->fetchAll(PDO::FETCH_BOTH); RETORNA ARRAY COM INDICE NUMERO E ASSOCIATIVO
        // $lista = $stmt->fetchAll(PDO::FETCH_OBJ); RETORNA OBJETO
        // echo "<pre>";
        // print_r($lista);
        // echo "</pre>";

        // echo $lista[0]['nome'];

        foreach ($lista as $key => $value) {
            $id = $value['id_usuario'];
            $nome = $value['nome'];
            $email = $value['email'];
            $senha = $value['senha'];

            echo "ID: $id, NOME: $nome EMAIL: $email, SENHA: $senha <hr/> ";
        }

    } catch (PDOException $e){
        echo "Erro: ".$e->getCode() ." Messagem: ".$e->getMessage();
        //registrar erro
    }