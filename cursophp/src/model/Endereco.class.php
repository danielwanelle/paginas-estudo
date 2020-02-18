<?php

    namespace banco\model;

    class Endereco{
        
        private $cidade, $bairro, $rua, $numero;

        public function __construct($cidade, $bairro, $rua, $numero){
            $this->cidade = $cidade;
            $this->bairro = $bairro;
            $this->rua = $rua;
            $this->numero = $numero;
        }

        public function __toString(){ //metodo para printar classe
            return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
        }

        public function __get($atributo){ //recupera informação passada como metodo, para substituir os getters, há o __set tambem
            $metodo = 'get' . ucfirst($atributo); //concatena 'get' com a variável com a primeira letra maiúscula
            return $this->$metodo();
        }

        public function getCidade(){
            return $this->cidade;
        }

        public function getBairro(){
            return $this->bairro;
        }

        public function getRua(){
            return $this->rua;
        }

        public function getNumero(){
            return $this->numero;
        }

    }

?>