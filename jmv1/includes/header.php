<?php
  session_start();
  if(!isset($_SESSION['usuario'])):
    $_SESSION['loginErro'] = "Voce precisa estar logado <br/> para acessar esta página";
    header("Location: ../index.php");
  endif;
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Manutenção de Clientes</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet" type="text/css"/>

  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 header">

          <nav class="navbar navbar-default">
            <div class="container-fluid">

              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Manutenção de clientes</a>
              </div>


              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li><a href="../Clientes">Clientes</a></li>
                  <li><a href="../Usuarios">Usuários</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><p class="navbar-text">Bem vindo <?= $_SESSION['usuario'];?></p></li>
                  <li><a href="../controller/Sair.php">Sair</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
