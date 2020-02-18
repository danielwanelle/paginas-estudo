<?php

include_once '../php_action/db_connect.php';
include_once '../inc/header.php';
include_once 'inc/bl.php';

?>
<script type="text/javascript" src="../js/init-form.js"></script>

  <div class="row">
    <form action="../model/fatura.php" method="post" class="col s12 m10 push-m1">
      <h3 class="light">Adicionar fatura</h3>
      <div class="row">
        <div class="input-field col s12 m6 push-m3">
          <input type="text" name="valor" id="valor" />
          <label for="valor">Valor</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6 push-m3">
          <input type="text" name="vencimento" id="vencimento" class="datepicker" />
          <label for="vencimento">Vencimento</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6 push-m3">
          <input type="text" name="pago" id="pago" />
          <label for="pago">Pago</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6 push-m3">
          <select name="contrato" id="contrato">
            <option value="" disabled selected>Selecione o contrato</option>
            <?php

              $sql = "SELECT * FROM contrato";
              $resultado = mysqli_query($connect, $sql);

              while($dados = mysqli_fetch_array($resultado)):

            ?>
            <option value="<?php echo $dados['idContrato']; ?>">
              <?php echo $dados['idContrato']; ?>
            </option>
            <?php

              endwhile;

            ?>
          </select>
          <label for="contrato">Contrato</label>
        </div>
      </div>
      <button type="submit" class="btn" name="btn-criar"><i class="material-icons">create</i></button>
    </form>
  </div>
<?php include_once '../inc/footer.php' ?>
