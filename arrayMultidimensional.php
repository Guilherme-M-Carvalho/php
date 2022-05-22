<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array multidimensional</title>
</head>
<body>

    <?php

        $lista_coisas = [];

        $lista_coisas['Frutas'] = array('Banana','Maça','Uva','Morango');
        $lista_coisas['Nomes'] = ['Guilherme','Anderson','Veronica','Antonio'];

        echo '<pre>';
        print_r($lista_coisas['Nomes'][3]);
        echo '</pre>';
    
    ?>
    
</body>
</html>