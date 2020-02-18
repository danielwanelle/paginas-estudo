<?php

    namespace banco\model\funcionario;

    use banco\model\{Pessoa, Cpf};

    abstract class Funcionario extends Pessoa{

        private $salario;

        public function __construct($nome, $cpf, $salario){
            parent::__construct($nome, $cpf);
            $this->salario = $salario;
        }

        public function getSalario(){
            return $this->salario;
        }

        public function aumentaSalario($salario){
            if($salario <= 0):
                echo 'O aumento deve ser positivo';
                return;
            endif;
            $this->salario += $salario;
        }

        public function setNome($nome){
            $this->validarPessoa($nome);
            $this->nome = $nome;
        }

        public abstract function calcularBonificacao():float;

    }

?>