<?php

    namespace banco\model;

    abstract class Pessoa{

        private $nome;
        protected $cpf;

        public function __construct($nome, $cpf){
            $this->validarPessoa($nome);
            $this->nome = $nome;
            $this->cpf = $cpf;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getCpf(){
            return $this->cpf->getCpf();
        }

        final protected function validarPessoa($nome){ //metodo não pode ser sobreescrito
            if(strlen($nome) < 5):
                echo "Nome {$nome} inválido <br>";
                exit();
            endif;
        }

    }

?>