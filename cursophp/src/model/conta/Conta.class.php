<?php

    namespace banco\model\conta;

    use banco\model\conta\Titular;
    use \Exception; //Importa classe Exception

    require_once 'Titular.class.php';

    abstract class Conta extends Exception{

        //Atributos
        protected $titular, $saldo, $agencia, $numero;
        public static $numeroDeContas = 0, $taxaOperacao = 0; // Atributo de classe e não da instância

        //Metodos especiais
        public function __construct($nome, $cpf, $endereco, $agencia, $numero){
            $this->titular = new Titular($nome, $cpf, $endereco);
            $this->saldo = 0;
            $this->agencia = $agencia;
            $this->numero = $numero;

            self::$numeroDeContas++; //Manipulando atributo estático

            try {
                if(self::$numeroDeContas < 1):
                    throw new Exception("Valor inferior a zero!");
                endif;
                self::$taxaOperacao = intDiv(30, self::$numeroDeContas);
            } catch (Exception $erro) {
                echo $erro->getMessage();
                exit;
            }
            
        }

        public function __destruct(){ // Método que executa quando a instancia deixar de existir
            self::$numeroDeContas--;
        }

        //Metodos
        public function sacar(float $valor){
            //tarifa
            $tarifa = $valor * $this->percentualTarifa();
            $saque = $valor + $tarifa;

            if($saque > $this->saldo):
                echo 'Não há saldo suficiente para efetuar esta operação.';
                return;
            endif;
            
            echo 'Operação realizada com sucesso!<br>';
            $this->saldo -= $saque;
        }

        public function depositar(float $valor){
            if($valor < 0):
                echo 'O valor a ser depositado, precisa ser positivo!';
                return;
            endif;

            echo 'Operação realizada com sucesso!<br>';
            $this->saldo += $valor;
        }

        public function consultarSaldo(): float{
            return $this->saldo;
        }

        public static function getNumeroDeContas(): int{
            return self::$numeroDeContas;
        }

        abstract protected function percentualTarifa(): float;
        
    }

?>