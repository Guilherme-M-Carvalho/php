<?php

    class Veiculo{
        public $placa = null;
        public $cor = null;

        function acelerar(){
            echo "Acelerar";
        }
        function freiar(){
            echo "Freiar";
        }

        function trocarMarcha(){
            echo "Desengatar embreagem com o pe e engatar marcha com a mao";
        }

    }

    class Moto extends Veiculo{
        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function trocarMarcha(){
            echo "Desengatar embreagem com a mao e engatar marcha com o pe";
        }
    }

    class Carro extends Veiculo{
        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }
    }

    class Caminhao extends Veiculo{

    }

    $carro = new Carro('ABBDS123', 'Branco');
    $carro->trocarMarcha();

    echo "<br/><br/>";
    
    $moto = new Moto('Ddsa432', 'Verde');
    $moto->trocarMarcha();
    
    echo "<br/><br/>";

    $caminhao = new Caminhao();
    $caminhao->trocarMarcha();

?>