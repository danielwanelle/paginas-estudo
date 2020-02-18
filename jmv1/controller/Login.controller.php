<?php

  session_start();

  require_once '../dao/Usuarios.dao.php';
  require_once '../model/Usuario.class.php';

  $u = new Usuario();

  if((isset($_POST['usuario'])) && (isset($_POST['senha']))):
    $u->usuario = $_POST['usuario'];
    $u->senha = md5($_POST['senha']);

    $usr = UsuariosDAO::validaUsuario($u);

    if(isset($usr)):
      $_SESSION['usuario'] = $usr[1];
      $_SESSION['perfil'] = $usr[3];
      header("Location: ../Clientes");
    else:
      $_SESSION['loginErro'] = "Usuário ou senha inválidos!";
      header("Location: ../index.php");
    endif;
  else:
    $_SESSION['loginErro'] = "Usuário ou senha inválidos!";
    header("Location: ../index.php");
  endif;


?>
