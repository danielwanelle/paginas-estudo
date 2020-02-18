<?php

    namespace banco\model\conta;

    use \Exception; //Importa classe Exception

    class ContaCorrente extends Conta{

        protected function percentualTarifa(): float{
            return 0.05;
        }

        public function transferir(Conta $contaDestino, float $valor){
            if($valor<0):
                throw new Exception('Não é possível transferir um valor negativo!');
            endif;
            if($valor > $this->saldo):
                throw new Exception('Não há saldo suficiente para efetuar esta operação.');
            endif;

            echo 'Operação realizada com sucesso!<br>';
            $this->sacar($valor);
            $contaDestino->depositar($valor);
        }

    }

?>