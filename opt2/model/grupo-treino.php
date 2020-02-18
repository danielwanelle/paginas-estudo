<?php
  //Sessão
  session_start();
  //Conexão
  require_once '../php_action/db_connect.php';

  //Adicionar
  if(isset($_POST['btn-criar'])):
    $idTreino = mysqli_escape_string($connect, $_POST['idTreino']);
    $idGrupo = mysqli_escape_string($connect, $_POST['idGrupo']);

    $sql = "INSERT INTO relGrupoTreino (idTreino, idGrupo) VALUES ('$idTreino', '$idGrupo')";

    if(mysqli_query($connect, $sql)):
      $_SESSION['mensagem'] = "Grupo Atualizado com sucesso!";
      header('Location: ../view/edita-grupo.php');
    else:
      $_SESSION['mensagem'] = "Falha ao atualizar, procure o administrador do sistema.";
      header('Location: ../view/edita-grupo.php');
    endif;

  endif;

  //Editar
  /*if(isset($_POST['btn-editar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);
    $peso = mysqli_escape_string($connect, $_POST['peso']);
    $altura = mysqli_escape_string($connect, $_POST['altura']);
    $ficha = mysqli_escape_string($connect, $_POST['ficha']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE Aluno SET nome = '$nome', email = '$email', cpf = '$cpf', peso = '$peso', altura = '$altura', idFicha = '$idFicha' WHERE idAluno = '$id'";

    if(mysqli_query($connect, $sql)):
      $_SESSION['mensagem'] = "Aluno alterado com sucesso!";
      header('Location: ../index.php');
    else:
      $_SESSION['mensagem'] = "Falha ao alterar, procure o administrador do sistema.";
      header('Location: ../index.php');
    endif;

  endif;

  //Desativar
  if(isset($_POST['btn-deletar'])):
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE Aluno SET ativo = false WHERE idAluno = '$id'";

    if(mysqli_query($connect, $sql)):
      $_SESSION['mensagem'] = "Aluno excluido com sucesso!";
      header('Location: ../index.php');
    else:
      $_SESSION['mensagem'] = "Falha ao excluir, procure o administrador do sistema.";
      header('Location: ../index.php');
    endif;

  endif;*/

 ?>
