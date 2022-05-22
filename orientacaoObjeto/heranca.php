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
    
    }


    class Carro extends Veiculo{
        public $tetoSolar = true;

class Pai{
        private $nome = 'Anderson';
        protected $sobrenome = 'Carvalho';
        public $humor = 'feliz';

        public function __get($atributo){
            return $this->$atributo;
        }
        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        private function executarMania(){
            echo "Assobiar";
        }

        protected function responder(){
            echo "oi";
        }
     
        public function executarAcao(){

            $x = rand(1,10);

            if($x >=1 && $x <=8){
            $this->responder();
            } else{
            echo "<br/>";
            $this->executarMania();
            }
        }


        function abrirTetoSolar(){
            echo "Abrir teto solar";
        }

        function alterarPosicaoVolante(){
            echo "alterar posição volante";
        }
    }

    class Moto extends Veiculo{
        
        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }
        
        function empinar(){
            echo "Empinar";
        }

    }

    $carro=new Carro('ABCD123', 'Branco');
    $moto=new Moto('DCBA123', 'Verde');

    echo "<pre>";
    print_r($carro);
    echo "</pre>";
    echo "<pre>";
    echo"<br/>";
    print_r($moto);
    echo "</pre>";
    
    echo $moto->acelerar();
    echo $moto->freiar();
    echo "<br/>";
    echo $carro->freiar();
    echo $carro->acelerar();
    
?>