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

        $nomes = ['Guilherme', 'Miranda', 'de', 'Carvalho'];
 
 
       for ($i=0; $i < count($nomes); $i++) { 
            echo "<br/>".$nomes[$i];
            //break
            //continue
        }

    ?>
    
</body>
</html>