<?php

    namespace banco\model\funcionario;

    class Desenvolvedor extends Funcionario{

        public function calcularBonificacao():float {
            return 500;
        }

        public function sobeNivel(){
            $this->aumentaSalario($this->getSalario() * 0.75);
        }

    }

?>