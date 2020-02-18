<?php
  //Sessão
  session_start();
  //Conexão
  require_once '../php_action/db_connect.php';

  //Adicionar
  if(isset($_POST['btn-criar'])):
    $descricao = mysqli_escape_string($connect, $_POST['descricao']);

    $sql = "INSERT INTO grupo (descricao) VALUES ('$descricao')";

    if(mysqli_query($connect, $sql)):
      $_SESSION['mensagem'] = "Grupo cadastrado com sucesso!";
      header('Location: ../grupos.php');
    else:
      $_SESSION['mensagem'] = "Falha ao cadastrar, procure o administrador do sistema.";
      header('Location: ../grupos.php');
    endif;

  endif;

  //Editar
  if(isset($_POST['btn-editar'])):
    $descricao = mysqli_escape_string($connect, $_POST['descricao']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE grupo SET descricao = '$descricao' WHERE idGrupo = '$id'";

    if(mysqli_query($connect, $sql)):
      $_SESSION['mensagem'] = "Grupo alterado com sucesso!";
      header('Location: ../grupos.php');
    else:
      $_SESSION['mensagem'] = "Falha ao alterar, procure o administrador do sistema.";
      header('Location: ../grupos.php');
    endif;

  endif;

  //Desativar
  /*if(isset($_POST['btn-deletar'])):
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE grupo SET ativo = false WHERE idAluno = '$id'";

    if(mysqli_query($connect, $sql)):
      $_SESSION['mensagem'] = "Aluno excluido com sucesso!";
      header('Location: ../index.php');
    else:
      $_SESSION['mensagem'] = "Falha ao excluir, procure o administrador do sistema.";
      header('Location: ../index.php');
    endif;

  endif;*/

 ?>
