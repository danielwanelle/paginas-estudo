<?php

  require_once '../dao/Clientes.dao.php';
  include '../includes/header.php';

?>
<div class="row">
        <div class="col-md-12">
          <h1>Clientes</h1>
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
                <td>Nome</td>
                <td>CPF</td>
                <td>RG</td>
                <td>Data de nascimento</td>
                <td>Telefone Principal</td>
                <td>Outro Telefone</td>
                <td>E-mail</td>
                <?php if(($_SESSION['perfil']) != 'Normal'): ?><td colspan="2">Opções</td><?php endif;?>
              </tr>
              <?php foreach (ClientesDAO::readCliente() as $tabela): ?>
                <tr>
                  <td><?= $tabela[1] ?></td>
                  <td><?= $tabela[2] ?></td>
                  <td><?= $tabela[3] ?></td>
                  <td><?= $tabela[4] ?></td>
                  <td><?= $tabela[5] ?></td>
                  <td><?= $tabela[6] ?></td>
                  <td><?= $tabela[7] ?></td>
                  <?php if(($_SESSION['perfil']) != 'Normal'): ?><td><a href="editar.php?id=<?= $tabela[0] ?>">Editar</a></td>
                  <?php if(($_SESSION['perfil']) == 'Super Admin'): ?><td><a href="../controller/Clientes.controller.php?a=del&id=<?= $tabela[0] ?>" onclick="return confirm('Deseja apagar o Cliente?')">Excluir</a></td><?php endif; endif;?>
                </tr>
              <?php endforeach; ?>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>
      </div>
    <?php include '../includes/footer.php';  ?>
