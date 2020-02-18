<?php

  require_once '../dao/Clientes.dao.php';

  $cli = ClientesDAO::readClienteById($_GET['id']);
  include '../includes/header.php';
  if(($_SESSION['perfil']) == 'Normal'):

    header("Location: ./index.php");
  endif;
?>

      <div class="row">
        <div class="col-md-12">
          <h1>Editar cliente</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <form action="../controller/Clientes.controller.php?a=edit" method="post">
            <input type="hidden" name="id" value="<?= $cli[0] ?>">
            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" value="<?= $cli[1] ?>" required>
            </div>
            <div class="form-group">
              <label for="cpf">CPF</label>
              <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF" value="<?= $cli[2] ?>" required>
            </div>
            <div class="form-group">
              <label for="rg">RG</label>
              <input type="text" class="form-control" name="rg" id="rg" placeholder="RG" value="<?= $cli[3] ?>" required>
            </div>
            <div class="form-group">
              <label for="dataNasc">Data de Nascimento</label>
              <input type="date" class="form-control" name="dataNasc" id="dataNasc" placeholder="Data de nascimento" value="<?= $cli[4] ?>" required>
            </div>
            <div class="form-group">
              <label for="tel1">Telefone Principal</label>
              <input type="text" class="form-control" name="tel1" id="tel1" placeholder="Telefone principal" value="<?= $cli[5] ?>" required>
            </div>
            <div class="form-group">
              <label for="tel2">Outro Telefone</label>
              <input type="text" class="form-control" name="tel2" id="tel2" placeholder="Outro telefone" value="<?= $cli[6] ?>">
            </div>

            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" value="<?= $cli[7] ?>" required>
            </div>

            <button type="submit" class="btn btn-default">Salvar</button>
          </form>
        </div>
      </div>
  <?php include '../includes/footer.php';  ?>
