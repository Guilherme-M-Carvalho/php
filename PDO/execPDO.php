<?php
    $dsn = 'mysql:host=localhost;dbname=phpPDO';
    $usuario = 'root';
    $senha = 'root';

    try{
        $conexao = new PDO($dsn, $usuario, $senha);

        // $query = '
        //     create table tb_usuarios(
        //         id_usuario int not null primary key auto_increment,
        //         nome varchar(255) not null,
        //         email varchar(255) not null,
        //         senha varchar(255) not null
        //     )
        // ';

        
        // $query = "
        //     insert into tb_usuarios (nome, email, senha) values ('Guilherme', 'guimirand43214@gmail.com', '1234')
        // ";

        $query = "
            delete from tb_usuarios
        ";

        $retorno = $conexao->exec($query);

        echo $retorno;


    } catch (PDOException $e){
        echo "Erro: ".$e->getCode() ." Messagem: ".$e->getMessage();
        //registrar erro
    }