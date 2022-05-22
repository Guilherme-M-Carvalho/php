<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array pesquisa</title>
</head>
<body>

    <?php

        $lista = ['Guilherme', 'Anderson', 'Antonio', 'Veronica', 'Neto'];

        echo '<pre>';
        print_r($lista);
        echo '</pre>';
    
        //retorna true ou false para a resposta da pesquisa dentro do array
        $exite = in_array('Guilherme',$lista);

        //retorna o indice do array caso exista, e null caso não existal
        $exite2 = array_search('jjose', $lista);

        if($exite){
            echo "Existe no array";
        } else {
            echo "não Existe no array";
        }

        if($exite2){
            echo "Existe no array";
        } else {
            echo "Não Existe no array";
        }
    ?>
    
</body>
</html>