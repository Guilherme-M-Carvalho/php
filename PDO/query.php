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
        $lista = $stmt->fetchAll();
        echo "<pre>";
        print_r($lista);
        echo "</pre>";

        echo $lista[0]['nome'];

    } catch (PDOException $e){
        echo "Erro: ".$e->getCode() ." Messagem: ".$e->getMessage();
        //registrar erro
    }