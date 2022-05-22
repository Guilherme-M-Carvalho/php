<?php

    class Funcionario{
        
        //atributos
        public $nome = null;
        public $idade = null;

        //metodos
        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }
        function __get($atributo){
            return $this->$atributo;
        }

        function exibirFuncionario(){
            return "O ". $this->__get('nome') ." tem " .$this->__get('idade') ." anos";
        }
    }

    $f1 = new Funcionario();
    $f1->__set('nome','Guilherme');
    $f1->__set('idade',18);
    echo $f1->exibirFuncionario();


?>