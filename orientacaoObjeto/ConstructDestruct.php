<?php
    class Pessoa{
        public $nome = null;
        public $idade = null;

        function __construct($nome, $idade){
            $this->nome = $nome;
            $this->idade = $idade;
        }

        //Ao remover a estancia do objeto apresentara esta mensagem
        function __destruct(){
            echo 'Objeto removido';
        }

        function __get($atributo){
            return $this->$atributo;
        }

        function exibirPessoa(){
            return "O $this->nome tem $this->idade anos";
        }
    }

    $pessoa = new Pessoa('Guilherme', 18);
    echo $pessoa->__get('nome');
    echo "<br/>".$pessoa->__get('idade');
    echo "<br/>";
    unset($pessoa);

?>