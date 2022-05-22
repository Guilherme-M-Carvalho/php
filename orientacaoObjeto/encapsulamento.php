<?php

    //public
    //protected
    //private


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

        // public function getNome(){
        //     return $this->nome;
        // }

        // public function setNome($nome){

        //     if(strlen($nome) >= 3){
        //         $this->nome = $nome;
        //     } else{
        //         echo "Erro o nome tem que ser maior que três caracteres";
        //     }
        // }

        // public function setSobrenome($sobrenome){
        //     $this->sobrenome = $sobrenome;
        // }

        // public function getSobrenome(){
        //    return $this->sobrenome;
        // }
    }




    $pai = new Pai();

    echo $pai->executarAcao();

    // echo $pai->humor;
    // $pai->humor = 'triste';
    // echo "<br/>";
    // echo $pai->humor;
    // echo"<br/>";
    // echo $pai->getNome();
    // echo"<br/>";
    // $pai->setNome('');
    // echo"<br/>";

    // echo $pai->getNome();

    // echo "<hr/>";

    // echo $pai->getSobrenome();
    // echo "<br/>";
    // echo $pai->setSobrenome('Miranda');
    // echo $pai->getSobrenome();
?>