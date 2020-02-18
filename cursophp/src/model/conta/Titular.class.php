<?php

    namespace banco\model\conta;

    require_once 'src/model/Pessoa.class.php';

    use banco\model\{Cpf, Endereco, Pessoa, Autenticavel};

    class Titular extends Pessoa{

        private $endereco;

        public function __construct($nome, $cpf, $endereco){
            parent::__construct($nome, $cpf);
            $this->endereco = $endereco;
        }

        public function getEndereço(){
            return $this->endereco;
        }

        public function autenticar(string $senha){
            if($senha === '1234'){
                return true;
            }
            return false;
        }

    }

?>