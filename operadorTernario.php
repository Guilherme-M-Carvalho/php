<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador Ternario</title>
</head>
<body>

    <?php

        $cartaoLoja = true;

        $valorCompra = 400;

        $resultado = $cartaoLoja ? 'Sim' : 'Não';

        $frete = $cartaoLoja && $valorCompra >= 400 ? 0 : ($cartaoLoja && $valorCompra >= 300 ? 10 : ($cartaoLoja && $valorCompra >= 100 ? 25 : $frete));

        echo "O frete é: $frete";

        echo "<br/> $resultado";

    ?>
    
</body>
</html>