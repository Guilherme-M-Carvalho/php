<?php
    class Funcionario{

        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        //metodos
        function getNome(){
            return $this->nome;
        }
        function getTelefone(){
            return $this->telefone;
        }
        function getNumFilhos(){
            return $this->numFilhos;
        }

        function setNome($nome){
            $this->nome = $nome;
        }
        function setTelefone($telefone){
            $this->telefone = $telefone;
        }
        function setNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }

        function exibirFuncionario(){
            return "$this->nome tem $this->numFilhos filho(s) o telefone é $this->telefone";
        }
    }

    $y = new Funcionario();
    echo $y->exibirFuncionario();
    echo $y->getNome();

    echo"O nome é " .$y->getNome()."<br/>";
    $y->setNome('Guilherme');
    $y->setNumFilhos(5);
    $y->setTelefone(11948157633);
    echo"O nome é " .$y->getNome()."<br/>";

    echo $y->exibirFuncionario();
    
?>