<?php

  class Cliente{
    public $idCliente;
    public $nome;
    public $cpf;
    public $rg;
    public $dataNasc;
    public $tel1;
    public $tel2;
    public $email;

    public function __construct(){
      $this->idCliente = 0;
      $this->nome = "";
      $this->cpf = "";
      $this->rg = "";
      $this->dataNasc = "";
      $this->tel1 = "";
      $this->tel2 = "";
      $this->email = "";
    }

  }

?>
