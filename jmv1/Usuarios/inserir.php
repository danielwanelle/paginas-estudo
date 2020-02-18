<?php

  include '../includes/header.php';

?>
      <div class="row">
        <div class="col-md-12">
          <h1>Inserir usuario</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <form action="../controller/Usuarios.controller.php?a=ins" method="post">
            <div class="form-group">
              <label for="usuario">Usuário</label>
              <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuário" required>
            </div>
            <div class="form-group">
              <label for="senha">Senha</label>
              <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required>
            </div>
            <div class="form-group">
              <label for="rg">Perfil</label>
              <select class="form-control" name="perfil" id="perfil">
                <option selected value="Normal">Normal</option>
                <option value="Admin">Admin</option>
                <option value="Super Admin">Super Admin</option>
              </select>
            </div>

            <button type="submit" class="btn btn-default">Inserir</button>
          </form>
        </div>
      </div>
    <?php include '../includes/footer.php';  ?>
