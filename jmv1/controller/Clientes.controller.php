<?php

  session_start();
  if(($_SESSION['perfil']) != 'Super Admin'):

    header("Location: ../Clientes");
  endif;

  require_once '../dao/Clientes.dao.php';
  require_once '../model/Cliente.class.php';



  switch ($_GET['a']) {
    case 'ins':
      $c = new Cliente();


      $c->nome = $_POST['nome'];
      $c->cpf = $_POST['cpf'];
      $c->rg = $_POST['rg'];
      $c->dataNasc = $_POST['dataNasc'];
      $c->tel1 = $_POST['tel1'];
      $c->tel2 = $_POST['tel2'];
      $c->email = $_POST['email'];

      //var_dump($c);
      ClientesDAO::createCliente($c);
      break;

    case 'edit':
      $c = new Cliente();

      $c->idCliente = $_POST['id'];
      $c->nome = $_POST['nome'];
      $c->cpf = $_POST['cpf'];
      $c->rg = $_POST['rg'];
      $c->dataNasc = $_POST['dataNasc'];
      $c->tel1 = $_POST['tel1'];
      $c->tel2 = $_POST['tel2'];
      $c->email = $_POST['email'];

      ClientesDAO::updateCliente($c);
      break;

    case 'del':
      ClientesDAO::deleteCliente($_GET['id']);
      break;
  }

  header("Location: ../Clientes");

?>
