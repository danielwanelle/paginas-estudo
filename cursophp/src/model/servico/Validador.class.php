<?php

    namespace banco\model\servico;

    class Validador{

        public function login($diretor, $senha){
            if($diretor->autenticar($senha)):
                echo 'Usuário logado';
                return true;
            endif;
            echo 'Usuário não autenticado';
            return false;
        }

    }

?>