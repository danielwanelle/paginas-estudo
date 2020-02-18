<?php

  require_once '../dao/Usuarios.dao.php';
  include '../includes/header.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Usuarios</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">

  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Usuarios</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-1 col-md-offset-11">
          <a href="inserir.php">Inserir</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table table-striped">
            <thead>
              <tr>
                <td>Usuario</td>
                <td>Perfil</td>
                <?php if(($_SESSION['perfil']) != 'Normal'): ?><td colspan="2">Opções</td><?php endif;?>
              </tr>
              <?php foreach (UsuariosDAO::readUsuario() as $tabela): ?>
                <tr>
                  <td><?= $tabela[1] ?></td>
                  <td><?= $tabela[3] ?></td>
                  <?php if(($_SESSION['perfil']) != 'Normal'): ?><td><a href="editar.php?id=<?= $tabela[0] ?>">Editar</a></td>
                  <?php if(($_SESSION['perfil']) == 'Super Admin'): ?><td><a href="../controller/Usuarios.controller.php?a=del&id=<?= $tabela[0] ?>" onclick="return confirm('Deseja apagar o Usuario?')">Excluir</a></td><?php endif; endif;?>
                </tr>
              <?php endforeach; ?>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>
      </div>
    <?php include '../includes/footer.php';  ?>
