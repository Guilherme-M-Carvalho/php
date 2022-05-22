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
    
        $funcionarios = ["Guilherme", "Miranda", "de", "Carvalho"];
        echo "<pre>";
        print_r($funcionarios);
        echo "</pre>";

        foreach($funcionarios as $id => $nome_funcionarios){
            echo"<br/>Id: ".$id ." nome: ".$nome_funcionarios;
        }

        $funcionarios = [['nome' => 'Guilherme', 'salario' => 1.212],['nome'=>'Joao','salario'=>'5000'],['nome'=>'Julia','salario'=>'3000']];

        echo "<pre>";
        print_r($funcionarios);
        echo "</pre>";

        foreach($funcionarios as $id => $func){
        
            foreach($func as $idx => $funcionario){
                echo "<br/><br/> id: $idx, nome: $funcionario";
            }
        }

    ?>
    
</body>
</html>