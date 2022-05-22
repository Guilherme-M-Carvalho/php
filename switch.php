<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    
    <?php
    
    $nome = 'Guilherme';

    switch($nome){
        case 'Guilherme':
            echo 'O nome é: '.$nome;
            break;
        case 'Anderson':
            echo "O $nome trabalha todos os dias";
            break;
        default:
            echo "nenhum";
            break;
    }

    ?>

</body>
</html>