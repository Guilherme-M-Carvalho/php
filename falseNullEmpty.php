<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //False (true/false) - tipo variavel boolean
        //null e empty - valores especiais

        $funcionario1 = null;
        $funcionario2 = '';
        $funcionario3 = false;

        if(is_null($funcionario1)){
            echo "sim, a variavel e null";
        } else {
            echo "<br/>Não, a variavel não é null";
        }
        if(is_null($funcionario2)){
            echo "sim, a variavel e null";
        } else {
            echo "<br/>Não, a variavel não é null";
        }
        if(is_null($funcionario3)){
            echo "sim, a variavel e null";
        } else {
            echo "<br/>Não, a variavel não é null";
        }

        if(empty($funcionario1)){
            echo "<br/>sim, a variavel e vazia";
        } else {
            echo "<br/>Não, a variavel não é vazia";
        }
        if(empty($funcionario2)){
            echo "<br/>sim, a variavel e vazia";
        } else {
            echo "<br/>Não, a variavel não é vazia";
        }
        if(empty($funcionario3)){
            echo "<br/>sim, a variavel e vazia";
        } else {
            echo "<br/>Não, a variavel não é vazia";
        }
    
    ?>
    
</body>
</html>