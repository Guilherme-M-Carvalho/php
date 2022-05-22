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

        $array = 'String';

        //Verifica se é um array e retorna true ou false
        $retorno = is_array($array);

        if($retorno){
            echo "Sim, é um array";
        } else {
            echo "Nao, nao é um array";
        }

        //retorna as chaves do array        
        $nomes = ['Guilherme','Joao','Antonio','Marcio', 'Mauro', 'Maria'];        

        $chaveDoArray = array_keys($nomes);

        echo'<pre>';
        print_r($chaveDoArray);
        echo '</pre>';

        //ordenar o array
        sort($nomes);

        echo '<pre>';
        print_r($nomes);
        echo '</pre>';

        $nomes = ['Guilherme','Joao','Antonio','Marcio', 'Mauro', 'Maria'];     

        //preservar o mesmos indices
        asort($nomes);

        echo '<pre>';
        print_r($nomes);
        echo '</pre>';

        //contabiliza a quantidade de elementos dentro do array
        $qtd = count($nomes);
        echo "<br/>".$qtd;

        //fundir varios array em um so

        $n1 = ['Teste', 'windows'];
        $n2 = ['mac', 'Linux'];
        $n3 = ['notebook', 'celular'];

        $unirArray = array_merge($n1,$n2,$n3);

        echo '<br/>';
        print_r($unirArray);

        //Transforma uma string em array atraves de um delimitador
        
        $stringExplode = 'Guilherme-Miranda-de-Carvalho';
        $arrayExplode = explode('-',$stringExplode);
        echo"<br/>";
        print_r($arrayExplode);

        //Junta elemento de um array em uma string

        $stringImplode = implode(' ',$arrayExplode);
        
        echo "<br/>".$stringImplode;
    ?>

</body>
</html>