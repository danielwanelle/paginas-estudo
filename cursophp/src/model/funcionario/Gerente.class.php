<?php

    namespace banco\model\funcionario;

    use banco\model\Autenticavel;

    class Gerente extends Funcionario{

        public function calcularBonificacao():float {
            return $this->getSalario();
        }

        public function autenticar(string $senha){
            if($senha === '1234'){
                return true;
            }
            return false;
        }

    }

?>