<?php

    class Funcionario{
        //atributos
        public $nome = 'Guilherme';
        public $telefone = null;
        public $numFilhos = 0;

        //metodos
        function resumirCadFunc(){
            return "$this->nome possui $this->numFilhos filho(s)<br/>";
        }

        function modificarNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }


    }


    $y = new Funcionario();
    echo $y->resumirCadFunc();
    $y->modificarNumFilhos(3);
    echo $y->resumirCadFunc();

?>