<?php

include_once 'inc/msg.php';
include_once 'php_action/db_connect.php';
include_once 'inc/header.php';

?>

<script type="text/javascript" src="js/init-form.js"></script>

  <div class="row white">
      <div class="col s12 m10 push-m1">
        <div class="row">
          <div class="input-field col s12 m6 push-m3">
            <input placeholder="" type="text" name="usuario" id="usuario" />
            <label for="usuario">Usuário</label>
          </div>

        </div>
        <div class="row">
          <div class="input-field col s12 m6 push-m3">
            <input placeholder="" type="password" name="senha" id="senha" />
            <label for="senha">Senha</label>

          </div>
        </div>
          <a href="http://localhost/opt2/cms.php"<button type="submit" class="btn" name="btn-criar"><i class="material-icons">create</i></button>
      </div>
    </div>

<?php include_once 'inc/footer.php' ?>
