<?php
    $dsn = 'mysql:host=localhost;dbname=phpPDO';
    $usuario = 'root';
    $senha = 'root';

    try{
        $conexao = new PDO($dsn, $usuario, $senha);

    } catch (PDOException $e){
        echo "Erro: ".$e->getCode() ." Messagem: ".$e->getMessage();
        //registrar erro
    }