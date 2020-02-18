<?php

  require_once '../dao/Usuarios.dao.php';

  $usr = UsuariosDAO::readUsuarioById($_GET['id']);
  include '../includes/header.php';
  if(($_SESSION['perfil']) == 'Normal'):

    header("Location: ./index.php");
  endif;

?>

      <div class="row">
        <div class="col-md-12">
          <h1>Editar Usuário</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <form action="../controller/Usuarios.controller.php?a=edit" method="post">
            <input type="hidden" name="id" value="<?= $usr[0] ?>">

            <div class="form-group">
              <label for="usuario">Usuário</label>
              <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuário" value="<?= $usr[1] ?>" required>
            </div>
            <div class="form-group">
              <label for="senha">Senha</label>
              <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required>
            </div>
            <div class="form-group">
              <label for="rg">Perfil</label>
              <select class="form-control" name="perfil" id="perfil">
                <option <?= ($usr[3] == 'Normal')?'selected':''?> value="Normal">Normal</option>
                <option <?= ($usr[3] == 'Admin')?'selected':''?> value="Admin">Admin</option>
                <option <?= ($usr[3] == 'Super Admin')?'selected':''?> value="Super Admin">Super Admin</option>
              </select>
            </div>

            <button type="submit" class="btn btn-default">Salvar</button>
          </form>
        </div>
      </div>
    <?php include '../includes/footer.php'; ?>
