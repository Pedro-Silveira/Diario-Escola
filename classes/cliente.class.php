<?php
    class Cliente{
        private $nome;
        private $dataNascimento;

        public function __construct($nome){
            $this->nome = $nome;
        }

        public function __get($atributo){
            return $this->$atributo;
        }

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        public function __toString(){
            return '<p>Nome: '.$this->nome.
            '.<br />Data de Nascimento: '.date_format(date_create($this->dataNascimento), "d/m/Y").
            '.</p>';
        }
    }
?>