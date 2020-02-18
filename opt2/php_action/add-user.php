<?php
  //Sessão
  session_start();
  //Conexão
  require_once 'db_connect.php';

  if(isset($_POST['btn-criar'])):
    $usuario = mysqli_escape_string($connect, $_POST['usuario']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    $sql = "INSERT INTO usuario (usuario, senha) VALUES ('$usuario', '$senha')";

    if(mysqli_query($connect, $sql)):
      $_SESSION['mensagem'] = "Usuário cadastrado com sucesso!";
      header('Location: ../index.php');
    else:
      $_SESSION['mensagem'] = "Falha ao cadastrar, procure o administrador do sistema.";
      header('Location: ../index.php');
    endif;

  endif;

 ?>
