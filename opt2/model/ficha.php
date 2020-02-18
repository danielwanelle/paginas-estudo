<?php
  //Sessão
  session_start();
  //Conexão
  require_once '../php_action/db_connect.php';

  //Adicionar
  if(isset($_POST['btn-criar'])):
    $descricao = mysqli_escape_string($connect, $_POST['descricao']);
    $observacao = mysqli_escape_string($connect, $_POST['observacao']);

    $sql = "INSERT INTO ficha (descricao, observacao) VALUES ('$descricao', '$observacao')";

    if(mysqli_query($connect, $sql)):
      $_SESSION['mensagem'] = "Ficha cadastrado com sucesso!";
      header('Location: ../fichas.php');
    else:
      $_SESSION['mensagem'] = "Falha ao cadastrar, procure o administrador do sistema.";
      header('Location: ../fichas.php');
    endif;

  endif;

  //Editar
  if(isset($_POST['btn-editar'])):
    $descricao = mysqli_escape_string($connect, $_POST['descricao']);
    $observacao = mysqli_escape_string($connect, $_POST['observacao']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE ficha SET descricao = '$descricao', observacao = '$observacao' WHERE idFicha = '$id'";

    if(mysqli_query($connect, $sql)):
      $_SESSION['mensagem'] = "Ficha alterada com sucesso!";
      header('Location: ../fichas.php');
    else:
      $_SESSION['mensagem'] = "Falha ao alterar, procure o administrador do sistema.";
      header('Location: ../fichas.php');
    endif;

  endif;

  //Desativar
  if(isset($_POST['btn-deletar'])):
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE ficha SET ativo = false WHERE idFicha = '$id'";

    if(mysqli_query($connect, $sql)):
      $_SESSION['mensagem'] = "Ficha excluida com sucesso!";
      header('Location: ../fichas.php');
    else:
      $_SESSION['mensagem'] = "Falha ao excluir, procure o administrador do sistema.";
      header('Location: ../fichas.php');
    endif;

  endif;

 ?>
