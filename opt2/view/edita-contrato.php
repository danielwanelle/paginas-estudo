<?php

include_once '../php_action/db_connect.php';
include_once '../inc/msg.php';
include_once '../inc/header.php';
include_once 'inc/bl.php';

//verifica se há id na urldecode
if(isset($_GET['id'])):
  $id = mysqli_escape_string($connect, $_GET['id']);

  $sql = "SELECT * FROM contrato WHERE idcontrato = '$id'";
  $resutado = mysqli_query($connect, $sql);
  $dados = mysqli_fetch_array($resutado);
endif;

?>

<script type="text/javascript" src="../js/init-form.js"></script>

  <div class="row">
    <form action="../model/contrato.php" method="post" class="col s12 m10 push-m1">
      <h3 class="light">Editar contrato</h3>
      <div class="row">
        <div class="input-field col s12 m6 push-m3">
          <input type="text" name="dataInicio" id="dataInicio" class="datepicker" value="<?php echo $dados['dataInicio']; ?>"/>
          <label for="dataInicio">Data de Início</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6 push-m3">
          <input type="text" name="dataTermino" id="dataTermino" class="datepicker" value="<?php echo $dados['dataTermino']; ?>"/>
          <label for="dataTermino">Data de Término</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6 push-m3">
          <input type="text" name="valor" id="valor" value="<?php echo $dados['valor']; ?>"/>
          <label for="valor">Valor</label>
        </div>
      </div>
      <input type="hidden" name="id" id="id" value="<?php echo $dados['idContrato']; ?>">
      <button type="submit" class="btn" name="btn-editar"><i class="material-icons">create</i></button>
    </form>
  </div>
  <div class="row">
    <div class="col s12 m10 push-m1">
      <h4 class="light">Treinos</h4>
      <table class="striped">
        <thead>
          <tr>
            <th>Descrição</th>
          </tr>
        </thead>
        <tbody>
          <?php

          $sql = "SELECT * FROM treino INNER JOIN relGrupoTreino ON relGrupoTreino.idTreino = treino.idTreino WHERE idGrupo = '$id'";
          $resultado = mysqli_query($connect, $sql);

          while($dados = mysqli_fetch_array($resultado)):

            ?>
            <tr>
              <th><?php echo $dados['descricao']; ?></th>
              <th><a href="model/grupo-treino.php?id=<?php echo $dados['idRelGrupoTreino']; ?>" class="btn-floating btn-small red"><i class="material-icons">delete</i></a></th>
            </tr>
            <?php

          endwhile;

          ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="row">
    <form action="../model/grupo-treino.php" method="post" class="col s12 m10 push-m1">
      <div class="row">
        <div class="input-field col s6 m3 push-m3">
          <input type="hidden" id="idGrupo" name="idGrupo" value="<?php echo $dados['idTreino']; ?>">
          <select name="idTreino" id="idTreino">
            <option value="" disabled selected>Selecione o Treino</option>
            <?php

              $sql = "SELECT * FROM treino";
              $resultado = mysqli_query($connect, $sql);

              while($dados = mysqli_fetch_array($resultado)):

            ?>
            <option value="<?php echo $dados['idTreino']; ?>">
              <?php echo $dados['descricao']; ?>
            </option>
            <?php

              endwhile;

            ?>
          </select>
          <label for="idTreino">Treino</label>
        </div>
        <div class="input-field col s6 m3 push-m3">
          <button type="submit" class="btn" name="btn-criar"><i class="material-icons">library_add</i></button>
        </div>
      </div>
    </form>
  </div>
<?php include_once '../inc/footer.php'; ?>
