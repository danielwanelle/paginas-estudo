<?php

include_once '../php_action/db_connect.php';
include_once '../inc/header.php';
include_once 'inc/bl.php';

?>
<script type="text/javascript" src="../js/init-form.js"></script>

  <div class="row">
    <form action="../model/aluno.php" method="post" class="col s12 m10 push-m1">
      <h3 class="light">Adicionar aluno</h3>
      <div class="row">
        <div class="input-field col s12 m6 push-m3">
          <input type="text" name="nome" id="nome" />
          <label for="nome">Nome:</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6 push-m3">
          <input type="text" name="email" id="email" />
          <label for="email">E-mail:</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6 push-m3">
          <input type="text" name="cpf" id="cpf" />
          <label for="cpf">CPF:</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6 push-m3">
          <input type="text" name="peso" id="peso" />
          <label for="peso">Peso</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6 push-m3">
          <input type="text" name="altura" id="altura" />
          <label for="altura">Altura</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6 push-m3">
          <select name="ficha" id="ficha">
            <option value="" disabled selected>Selecione a Ficha</option>
            <?php

              $sql = "SELECT * FROM ficha";
              $resultado = mysqli_query($connect, $sql);

              while($dados = mysqli_fetch_array($resultado)):

            ?>
            <option value="<?php echo $dados['idFicha']; ?>">
              <?php echo $dados['descricao']; ?>
            </option>
            <?php

              endwhile;

            ?>
          </select>
          <label for="ficha">Ficha</label>
        </div>
      </div>
      <div class="input-field col s12">
        <button type="submit" class="btn" name="btn-criar"><i class="material-icons">create</i></button>
      </div>
    </form>
  </div>

<?php include_once '../inc/footer.php' ?>
