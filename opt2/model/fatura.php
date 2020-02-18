<?php
  //Sessão
  session_start();
  //Conexão
  require_once '../php_action/db_connect.php';

  //Adicionar
  if(isset($_POST['btn-criar'])):
    $valor = mysqli_escape_string($connect, $_POST['valor']);
    $vencimento = mysqli_escape_string($connect, $_POST['vencimento']);
    $pago = mysqli_escape_string($connect, $_POST['pago']);
    $idContrato = mysqli_escape_string($connect, $_POST['idContrato']);

    $sql = "INSERT INTO fatura (valor, vencimento, pago, idContrato) VALUES ('$valor', '$vencimento', '$pago', '$idContrato')";

    if(mysqli_query($connect, $sql)):
      $_SESSION['mensagem'] = "Fatura cadastrada com sucesso!";
      header('Location: ../index.php');
    else:
      $_SESSION['mensagem'] = "Falha ao cadastrar, procure o administrador do sistema.";
      header('Location: ../index.php');
    endif;

  endif;

  //Editar
  if(isset($_POST['btn-editar'])):
    $valor = mysqli_escape_string($connect, $_POST['valor']);
    $vencimento = mysqli_escape_string($connect, $_POST['vencimento']);
    $pago = mysqli_escape_string($connect, $_POST['pago']);
    $idContrato = mysqli_escape_string($connect, $_POST['idContrato']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE fatura SET valor = '$valor', vencimento = '$vencimento', pago = '$pago', idContrato = '$idContrato' WHERE idFatura = '$id'";

    if(mysqli_query($connect, $sql)):
      $_SESSION['mensagem'] = "Fatura alterada com sucesso!";
      header('Location: ../index.php');
    else:
      $_SESSION['mensagem'] = "Falha ao alterar, procure o administrador do sistema.";
      header('Location: ../index.php');
    endif;

  endif;

  //Desativar
  if(isset($_POST['btn-deletar'])):
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE fatura SET ativo = false WHERE idFatura = '$id'";

    if(mysqli_query($connect, $sql)):
      $_SESSION['mensagem'] = "Fatura excluida com sucesso!";
      header('Location: ../index.php');
    else:
      $_SESSION['mensagem'] = "Falha ao excluir, procure o administrador do sistema.";
      header('Location: ../index.php');
    endif;

  endif;

 ?>
