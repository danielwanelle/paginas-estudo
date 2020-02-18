<?php

    namespace banco\model\funcionario;

    use banco\model\Autenticavel;

    class Diretor extends Funcionario implements Autenticavel{

        public function calcularBonificacao():float {
            return $this->getSalario() * 2;
        }

        public function autenticar(string $senha){
            if($senha === '1234'){
                return true;
            }
            return false;
        }

    }

?>