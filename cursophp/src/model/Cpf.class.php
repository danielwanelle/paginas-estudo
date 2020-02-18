<?php

namespace banco\model;

    final class Cpf{ //classe que não pode ser utilizada como mãe

        private $cpf;

        public function __construct($cpf){
            $this->cpf = $cpf;
        }

        public function getCpf(){
            return $this->cpf;
        }

    }

?>