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
    $texto = 'guilherme miranda de carvalho';

    // string maiuscula
    $texto = strtoupper($texto);
    echo $texto;

    //string minuscula 
    $texto = strtolower($texto);
    echo "<br />"  .$texto;

    //string primeiro caractere maiusculo
    $texto = ucfirst($texto);
    echo "<br />" .$texto;

    //quantidade de caracteres na string
    echo "<br />" .strlen($texto);

    // subistituir uma cadeia de caracteres por outra dentro de uma string
    $texto = str_replace(' ',"-",$texto);
    echo "<br />".$texto;

    //retorna parte de uma string
    $texto = substr($texto, 0, 9);
    echo "<br />" .$texto;

    
    
    ?>


</body>
</html>