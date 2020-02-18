<?php
  //Sessão
  session_start();
  //Conexão
  require_once 'db_connect.php';

  if(isset($_POST['btn-editar'])):
    $usuario = mysqli_escape_string($connect, $_POST['usuario']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE usuario SET usuario = '$usuario', senha = '$senha' WHERE idUsuario = $id";

    if(mysqli_query($connect, $sql)):
      $_SESSION['mensagem'] = "Usuário atualizado com sucesso!";
      header('Location: ../index.php');
    else:
      $_SESSION['mensagem'] = "Falha ao atualizar, procure o administrador do sistema.".$id;
      header('Location: ../index.php');
    endif;

  endif;

 ?>
