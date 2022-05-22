<?php

    //public
    //private
    //protected

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

    }

    //public e protected sao herdados no processo de heranca
    //private não e herdado na heranca

    class Filho extends Pai{
        
        public function __construct(){
            echo"<pre>";
            print_r(get_class_methods($this));
            echo"</pre>";
        }
        
        public function getAtributo($atributo){
            return $this->$atributo;
        }

        public function setAtributo($atributo, $valor){
            $this->$atributo = $valor;
        }
    }

    $filho = new Filho();

    // echo "<pre>";
    // print_r($filho);
    // echo "</pre>";

    // echo "<br/>";

    // echo $filho->getAtributo('humor');
    
    // $filho->setAtributo('humor','pensativo');
    // echo "<br/>".$filho->getAtributo('humor');

    // echo"<hr/>";

    // echo"<br/>";
    // echo $filho->getAtributo('nome');
    // echo"<br/>";
    // $filho->setAtributo('nome', 'Guilherme');
    // echo $filho->getAtributo('nome');
    // echo"<br/>";

    // print_r($filho);

    echo"<hr/>";

    echo"<pre>";
    print_r(get_class_methods($filho));
    echo"</pre>";
    echo $filho->__get('nome');
    echo"<hr/>";
    echo $filho->executarAcao();






?>