<?php

    class Exemplo{
        public static $atributo1 = 'Eu sou um atributo estatico';
        public $atributo2 = 'Eu sou um atributo normal';

        public static function metodo1()
        {
            echo "Eu sou um metodo estatico";
        }
        public function metodo2()
        {
            echo "Eu sou um metodo normal";
        }
    }

    
    //Ao utilizar atributo ou metodo estatico nao precisamos estanciar um objeto e podemos chama-lo a partir do exemplo abaixo
    
    echo Exemplo::$atributo1;
    echo "<br/>";
    Exemplo::metodo1();
    Exemplo::metodo2();

    
    $x = new Exemplo();
    echo $x->atributo2;
?>