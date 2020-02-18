<?php

    namespace banco\model\servico;

    use banco\model\funcionario\Funcionario;

    class ControladorBonificacao{

        private $totalBonificacoes = 0;

        public function adicionaBonificacao(Funcionario $funcionario){
            $this->totalBonificacoes += $funcionario->calcularBonificacao();
        }

        public function getTotalBonificacoes(){
            return $this->totalBonificacoes;
        }

    }

?>