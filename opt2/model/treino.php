<?php
  //Sessão
  session_start();
  //Conexão
  require_once '../php_action/db_connect.php';

  //Adicionar
  if(isset($_POST['btn-criar'])):
    $descricao = mysqli_escape_string($connect, $_POST['descricao']);
    $series = mysqli_escape_string($connect, $_POST['series']);
    $repeticoes = mysqli_escape_string($connect, $_POST['repeticoes']);
    $tipo = mysqli_escape_string($connect, $_POST['tipo']);


    $sql = "INSERT INTO treino (descricao, series, repeticoes, tipo) VALUES ('$descricao', '$series', '$repeticoes', '$tipo')";

    if(mysqli_query($connect, $sql)):
      $_SESSION['mensagem'] = "Treino cadastrado com sucesso!";
      header('Location: ../treinos.php');
    else:
      $_SESSION['mensagem'] = "Falha ao cadastrar, procure o administrador do sistema.";
      header('Location: ../treinos.php');
    endif;

  endif;

  //Editar
  if(isset($_POST['btn-editar'])):
    $descricao = mysqli_escape_string($connect, $_POST['descricao']);
    $series = mysqli_escape_string($connect, $_POST['series']);
    $repeticoes = mysqli_escape_string($connect, $_POST['repeticoes']);
    $tipo = mysqli_escape_string($connect, $_POST['tipo']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE treino SET descricao = '$descricao', series = '$series', repeticoes = '$repeticoes', tipo = '$tipo' WHERE idTreino = '$id'";

    if(mysqli_query($connect, $sql)):
      $_SESSION['mensagem'] = "Treino alterado com sucesso!";
      header('Location: ../treinos.php');
    else:
      $_SESSION['mensagem'] = "Falha ao alterar, procure o administrador do sistema.";
      header('Location: ../treinos.php');
    endif;

  endif;

  //Desativar
  if(isset($_POST['btn-deletar'])):
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE treino SET ativo = false WHERE idTreino = '$id'";

    if(mysqli_query($connect, $sql)):
      $_SESSION['mensagem'] = "Treino excluido com sucesso!";
      header('Location: ../treinos.php');
    else:
      $_SESSION['mensagem'] = "Falha ao excluir, procure o administrador do sistema.";
      header('Location: ../treinos.php');
    endif;

  endif;

 ?>
