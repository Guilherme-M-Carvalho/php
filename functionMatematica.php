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

        $num = 23.75;

        //Arredonda o valor para cima
        echo ceil($num);

        //Arredonda o valor para baixo
        echo "<br />" .floor($num);

        //Arredonda o valor com base nas casas decimais
        echo "<br />" .round(23.45) ." ou " .round(23.55);

        //Gera um inteiro aleatorio
        echo "<br />" .rand(0, 10) ." o maximo padrao é: " .getrandmax();

        //Retorna a raiz quadrada
        echo "<br />" .sqrt(49);
    
    
    ?>
    
</body>
</html>