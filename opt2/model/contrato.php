<?php
  //Sessão
  session_start();
  //Conexão
  require_once '../php_action/db_connect.php';

  //Adicionar
  if(isset($_POST['btn-criar'])):
    $dataInicio = mysqli_escape_string($connect, $_POST['dataInicio']);
    $dataTermino = mysqli_escape_string($connect, $_POST['dataTermino']);
    $valor = mysqli_escape_string($connect, $_POST['valor']);
    $idAluno = mysqli_escape_string($connect, $_POST['aluno']);

    $sql = "INSERT INTO contrato (dataInicio, dataTermino, valor, idAluno) VALUES ('$dataInicio', '$dataTermino', '$valor', '$idAluno')";

    if(mysqli_query($connect, $sql)):
      $_SESSION['mensagem'] = "Contrato cadastrado com sucesso!";
      header('Location: ../contratos.php');
    else:
      $_SESSION['mensagem'] = "Falha ao cadastrar, procure o administrador do sistema.";
      header('Location: ../contratos.php');
    endif;

  endif;

  //Editar
  if(isset($_POST['btn-editar'])):
    $dataInicio = mysqli_escape_string($connect, $_POST['dataInicio']);
    $dataTermino = mysqli_escape_string($connect, $_POST['dataTermino']);
    $valor = mysqli_escape_string($connect, $_POST['valor']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE contrato SET dataInicio = '$dataInicio', dataTermino = '$dataTermino', valor = '$valor' WHERE idContrato = '$id'";

    if(mysqli_query($connect, $sql)):
      $_SESSION['mensagem'] = "Contrato alterado com sucesso!";
      header('Location: ../contratos.php');
    else:
      $_SESSION['mensagem'] = "Falha ao alterar, procure o administrador do sistema.";
      header('Location: ../contratos.php');
    endif;

  endif;

  //Desativar
  if(isset($_POST['btn-deletar'])):
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE contrato SET ativo = false WHERE idContrato = '$id'";

    if(mysqli_query($connect, $sql)):
      $_SESSION['mensagem'] = "Contrato excluido com sucesso!";
      header('Location: ../index.php');
    else:
      $_SESSION['mensagem'] = "Falha ao excluir, procure o administrador do sistema.";
      header('Location: ../index.php');
    endif;

  endif;

 ?>
