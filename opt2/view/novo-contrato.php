<?php

include_once '../php_action/db_connect.php';
include_once '../inc/header.php';
include_once 'inc/bl.php';

?>
<script type="text/javascript" src="../js/init-form.js"></script>

  <div class="row">
    <form action="../model/contrato.php" method="post" class="col s12 m10 push-m1">
      <h3 class="light">Adicionar contrato</h3>
      <div class="row">
        <div class="input-field col s12 m6 push-m3">
          <input type="text" name="dataInicio" id="dataInicio" class="datepicker" />
          <label for="dataInicio">Data de Início</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6 push-m3">
          <input type="text" name="dataTermino" id="dataTermino" class="datepicker" />
          <label for="dataTermino">Data de Término</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6 push-m3">
          <input type="text" name="valor" id="valor" />
          <label for="valor">Valor</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6 push-m3">
          <select name="aluno" id="aluno">
            <option value="" disabled selected>Selecione o aluno</option>
            <?php

              $sql = "SELECT * FROM Aluno";
              $resultado = mysqli_query($connect, $sql);

              while($dados = mysqli_fetch_array($resultado)):

            ?>
            <option value="<?php echo $dados['idAluno']; ?>">
              <?php echo $dados['nome']; ?>
            </option>
            <?php

              endwhile;

            ?>
          </select>
          <label for="aluno">Nome</label>
        </div>
      </div>
      <button type="submit" class="btn" name="btn-criar"><i class="material-icons">create</i></button>
    </form>
  </div>
<?php include_once '../inc/footer.php' ?>
