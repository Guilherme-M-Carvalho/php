<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>

    <?php
        $listas = Array('Abacaxi', 'Abacate', 'Banana', 'Uva');

        echo $listas[0];
        echo "<br/>".$listas[1];
        echo "<br/>".$listas[2];
        echo "<br/>".$listas[3];
        echo "<pre>";
        var_dump($listas);
        echo "</pre><pre>";
        print_r($listas);
        echo "</pre>";

        $nomes = ['A'=>'Guilherme','B'=>'Anderson','C'=>'Veronica','D'=>'Teste'];

        echo $nomes['A'];
        echo "<br/>".$nomes['B'];
        echo "<br/>".$nomes['C'];
        echo "<br/>".$nomes['D'];
        echo "<pre>";
        var_dump($nomes);
        echo "</pre><pre>";
        print_r($nomes);
        echo "</pre>";

    ?>
    
</body>
</html>