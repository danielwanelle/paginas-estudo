<?php include_once 'inc/header.php' ?>

  <div class="row">
    <div class="col s12 m10 push-m1">
      <h3 class="light">Adicionar usuário</h3>
        <form action="php_action/add-user.php" method="post">
          <div class="input-field col s12 m6 push-m3">
            <input placeholder="" type="text" name="usuario" id="usuario" />
            <label for="usuario">Usuário</label>
            <input placeholder="" type="password" name="senha" id="senha" />
            <label for="senha">Senha</label>
            <button type="submit" class="btn" name="btn-criar"><i class="material-icons">create</i></button>
          </div>
        </form>
    </div>
  </div>

<?php include_once 'inc/footer.php' ?>
