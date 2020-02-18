<?php
  require_once '../model/Connect.class.php';
  require_once '../model/Usuario.class.php';
  class UsuariosDAO{
    public static function createUsuario($usr){
      $conn = new Connect();
      $conn->setConnect("INSERT INTO usuario (usuario, senha, perfil) VALUES ('". $usr->usuario ."', '". $usr->senha ."', '". $usr->perfil ."')");
      $conn->closeConnect();
    }

    public static function readUsuario(){
      $conn = new Connect();
      $res = $conn->getConnect("SELECT * FROM usuario");
      $conn->closeConnect();
      return $res;
    }

    public static function readUsuarioById($id){
      $conn = new Connect();
      $res = $conn->getConnect("SELECT * FROM usuario WHERE idUsuario = $id");
      $conn->closeConnect();
      return $res[0];
    }

    public static function updateUsuario($usr){
      $conn = new Connect();
      $conn->setConnect("UPDATE usuario SET usuario = '". $usr->usuario ."', senha = '". $usr->senha ."', perfil = '". $usr->perfil ."' WHERE idUsuario = '". $usr->idUsuario ."' ");
      $conn->closeConnect();
    }

    public static function deleteUsuario($id){
      $conn = new Connect();
      $conn->setConnect("DELETE FROM usuario WHERE idUsuario = $id");
      $conn->closeConnect();
    }

    public static function validaUsuario($usr){
      $conn = new Connect();
      $res = $conn->getConnect("SELECT * FROM usuario WHERE usuario = '". $usr->usuario ."' && senha = '". $usr->senha ."'");
      $conn->closeConnect();
      return $res[0];
    }

  }

?>
