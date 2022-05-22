<?php

    namespace A;

    class Cliente implements \B\CadastroInterface{
        public $nome = "Guilherme";

        public function __construct(){
            echo "<pre>";
            print_r(get_class_methods($this));
            echo "</pre>";
        }
        
        public function __get($atributo){
            return $this->$atributo;
        }
        
        public function remover(){
            echo "Remover";
        }
    }
    
    interface CadastroInterface{
        public function salvar();
    }
    
    namespace B;
    
    class Cliente implements \A\CadastroInterface{
        public $nome = "Anderson";
        
        public function __construct(){
            echo "<pre>";
            print_r(get_class_methods($this));
            echo "</pre>";
        }
        
        public function __get($atributo){
            return $this->$atributo;
        }
        public function salvar(){
            echo "Salvar";
        }
    }
    
    interface CadastroInterface{
        public function remover();
    }
    $c = new Cliente();
    print_r($c);
    echo $c->__get('nome');


    $c = new \A\Cliente();
    print_r($c);
    echo "<br/>" .$c->__get('nome');

?>