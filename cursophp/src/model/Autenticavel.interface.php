<?php

    namespace banco\model;

    interface Autenticavel{

        public function autenticar(string $senha):boolean;

    }

?>