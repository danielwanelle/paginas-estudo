<?php
  require_once '../model/Connect.class.php';
  require_once '../model/Contatos.class.php';
  class ContatosDAO{
    public static function createContato($cont){
      $conn = new Connect();
      $conn->setConnect("INSERT INTO propriedades (nome, endereco, telefone, email) VALUES ('". $cont->nome ."', '". $cont->endereco ."', '". $cont->telefone ."', '". $cont->email ."')");
      $conn->closeConnect();
    }

    public static function readContato(){
      $conn = new Connect();
      $res = $conn->getConnect("SELECT * FROM propriedades");
      $conn->closeConnect();
      return $res;
    }

    public static function readContatoByNome($nom){
      $conn = new Connect();
      $res = $conn->getConnect("SELECT * FROM propriedades WHERE nome LIKE '%$nom%'");
      $conn->closeConnect();
      return $res;
    }

    public static function readContatoById($id){
      $conn = new Connect();
      $res = $conn->getConnect("SELECT * FROM propriedades WHERE idContato = $id");
      $conn->closeConnect();
      return $res[0];
    }

    public static function updateContato($cont){
      $conn = new Connect();
      $conn->setConnect("UPDATE propriedades SET nome = '". $cont->nome ."', endereco = '". $cont->endereco ."', telefone = '". $cont->telefone ."', email = '". $cont->email ."' WHERE idContato = '". $cont->idContato ."' ");
      $conn->closeConnect();
    }

    public static function deleteContato($id){
      $conn = new Connect();
      $conn->setConnect("DELETE FROM propriedades WHERE idContato = $id");
      $conn->closeConnect();
    }
  }

?>
