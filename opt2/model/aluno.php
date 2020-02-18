<?php
  //Sessão
  session_start();
  //Conexão
  require_once '../php_action/db_connect.php';

  //Adicionar
  if(isset($_POST['btn-criar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);
    $peso = mysqli_escape_string($connect, $_POST['peso']);
    $altura = mysqli_escape_string($connect, $_POST['altura']);
    $ficha = mysqli_escape_string($connect, $_POST['ficha']);

    $sql = "INSERT INTO Aluno (nome, email, cpf, peso, altura, idFicha) VALUES ('$nome', '$email', '$cpf', '$peso', '$altura', '$ficha')";

    if(mysqli_query($connect, $sql)):
      $_SESSION['mensagem'] = "Aluno cadastrado com sucesso!";
      header('Location: ../alunos.php');
    else:
      $_SESSION['mensagem'] = "Falha ao cadastrar, procure o administrador do sistema.";
      header('Location: ../alunos.php');
    endif;

  endif;

  //Editar
  if(isset($_POST['btn-editar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);
    $peso = mysqli_escape_string($connect, $_POST['peso']);
    $altura = mysqli_escape_string($connect, $_POST['altura']);
    $idFicha = mysqli_escape_string($connect, $_POST['idFicha']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE Aluno SET nome = '$nome', email = '$email', cpf = '$cpf', peso = '$peso', altura = '$altura', idFicha = '$idFicha' WHERE idAluno = '$id'";

    if(mysqli_query($connect, $sql)):
      $_SESSION['mensagem'] = "Aluno alterado com sucesso!";
      header('Location: ../alunos.php');
    else:
      $_SESSION['mensagem'] = "Falha ao alterar, procure o administrador do sistema.";
      header('Location: ../alunos.php');
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

  endif;

 ?>
