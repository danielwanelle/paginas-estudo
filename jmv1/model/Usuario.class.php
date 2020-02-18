<?php

  class Usuario{
    public $idUsuario;
    public $usuario;
    public $senha;
    public $perfil;

    public function __construct(){
      $this->idUsuario = 0;
      $this->usuario = "";
      $this->senha = "";
      $this->perfil = "";
    }

  }

?>
