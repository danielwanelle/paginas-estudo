<?php

  session_start();
  if(($_SESSION['perfil']) != 'Super Admin'):

    header("Location: ../Usuarios");
  endif;

  require_once '../dao/Usuarios.dao.php';
  require_once '../model/Usuario.class.php';

  switch ($_GET['a']) {
    case 'ins':
      $u = new Usuario();

      $u->usuario = $_POST['usuario'];
      $u->senha = md5($_POST['senha']);
      $u->perfil = $_POST['perfil'];

      UsuariosDAO::createUsuario($u);
      break;

    case 'edit':
      $u = new Usuario();

      $u->idUsuario = $_POST['id'];
      $u->usuario = $_POST['usuario'];
      $u->senha = md5($_POST['senha']);
      $u->perfil = $_POST['perfil'];

      UsuariosDAO::updateUsuario($u);
      break;

    case 'del':
      UsuariosDAO::deleteUsuario($_GET['id']);
      break;

    /*case 'log':
      $u = new Usuario();

      $u->usuario = $_POST['usuario'];
      $u->senha = md5($_POST['senha']);

      $usr = UsuariosDAO::validaUsuario($u);

      if(isset($usr)):
        header("Location: ../Clientes");
      else:
        header("Location: ../index.php");
      endif;

      break;*/
  }

  header("Location: ../Usuarios");

?>
