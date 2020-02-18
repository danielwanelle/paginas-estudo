<?php

  class Contato{
    public $idContato;
    public $nome;
    public $endereco;
    public $telefone;
    public $email;

    public function __construct(){
      $this->idContato = 0;
      $this->nome = "";
      $this->endereco = "";
      $this->telefone = "";
      $this->email = "";
    }

  }

?>
