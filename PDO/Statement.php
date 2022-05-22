<?php

    if(!empty($_POST['email']) && !empty($_POST['senha'])){
        $email = $_POST['email'];
        $senhaP = $_POST['senha'];

        $dsn = 'mysql:host=localhost;dbname=phpPDO';
        $usuario = 'root';
        $senha = 'root';
    
        try{
            $conexao = new PDO($dsn, $usuario, $senha);
    
            $query = "
                select * from tb_usuarios where email = :email and senha = :senha
            "; 

        
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(':email',$email);
            $stmt->bindValue(':senha',$senhaP);

            $stmt->execute();
            
            $retorno = $stmt->fetch(PDO::FETCH_ASSOC);
            print_r($retorno);
        } catch (PDOException $e){
            echo "Erro: ".$e->getCode() ." Messagem: ".$e->getMessage();
            //registrar erro
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="SQLInjection.php" method="post">
        <input type="text" placeholder="email" name="email">
        <input type="password" placeholder="senha" name="senha">
        <input type="submit" value="Entrar">
    </form>
    
</body>
</html>