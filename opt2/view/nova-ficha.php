<?php

include_once '../php_action/db_connect.php';
include_once '../inc/header.php';
include_once 'inc/bl.php';

?>

  <div class="row">
    <form action="../model/ficha.php" method="post" class="col s12 m10 push-m1">
      <h3 class="light">Adicionar ficha</h3>
      <div class="row">
        <div class="input-field col s12 m6 push-m3">
          <input type="text" name="descricao" id="descricao" />
          <label for="descricao">Descrição</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6 push-m3">
          <input type="text" name="observacao" id="observacao" class="materialize-textarea" />
          <label for="observacao">Observação</label>
        </div>
      </div>
      <button type="submit" class="btn" name="btn-criar"><i class="material-icons">create</i></button>
    </form>
  </div>
<?php include_once '../inc/footer.php' ?>
