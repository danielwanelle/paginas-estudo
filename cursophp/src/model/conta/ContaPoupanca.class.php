<?php

    namespace banco\model\conta;

    class ContaPoupanca extends Conta{

        protected function percentualTarifa(): float{
            return 0.03;
        }

    }

?>