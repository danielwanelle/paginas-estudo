<?php
  require_once '../model/Connect.class.php';
  require_once '../model/Cliente.class.php';
  class ClientesDAO{
    public static function createCliente($cli){
      $conn = new Connect();
      $conn->setConnect("INSERT INTO cliente (nome, cpf, rg, dataNasc, tel1, tel2, email) VALUES ('". $cli->nome ."', '". $cli->cpf ."', '". $cli->rg ."', '". $cli->dataNasc ."', '". $cli->tel1 ."', '". $cli->tel2 ."', '". $cli->email ."')");
      $conn->closeConnect();
    }

    public static function readCliente(){
      $conn = new Connect();
      $res = $conn->getConnect("SELECT * FROM cliente");
      $conn->closeConnect();
      return $res;
    }

    public static function readClienteById($id){
      $conn = new Connect();
      $res = $conn->getConnect("SELECT * FROM cliente WHERE idCliente = $id");
      $conn->closeConnect();
      return $res[0];
    }

    public static function updateCliente($cli){
      $conn = new Connect();
      $conn->setConnect("UPDATE cliente SET nome = '". $cli->nome ."', cpf = '". $cli->cpf ."', rg = '". $cli->rg ."', dataNasc = '". $cli->dataNasc ."', tel1 = '". $cli->tel1 ."', tel2 = '". $cli->tel2 ."', email = '". $cli->email ."' WHERE idCliente = '". $cli->idCliente ."' ");
      $conn->closeConnect();
    }

    public static function deleteCliente($id){
      $conn = new Connect();
      $conn->setConnect("DELETE FROM cliente WHERE idCLiente = $id");
      $conn->closeConnect();
    }
  }

?>
