<?php

include_once '../php_action/db_connect.php';
include_once '../inc/header.php';
include_once 'inc/bl.php';

//verifica se há id na urldecode
if(isset($_GET['id'])):
  $id = mysqli_escape_string($connect, $_GET['id']);

  $sql = "SELECT * FROM ficha WHERE idFicha = '$id'";
  $resutado = mysqli_query($connect, $sql);
  $dados = mysqli_fetch_array($resutado);
endif;

?>

<script type="text/javascript" src="../js/init-form.js"></script>

  <div class="row">
    <form action="../model/ficha.php" method="post" class="col s12 m10 push-m1">
      <h3 class="light">Editar ficha</h3>
      <div class="row">
        <div class="input-field col s12 m6 push-m3">
          <input type="text" name="descricao" id="descricao" value="<?php echo $dados['descricao']; ?>"/>
          <label for="descricao">Descrição</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6 push-m3">
          <input type="text" name="observacao" id="observacao" value="<?php echo $dados['observacao']; ?>" />
          <label for="observacao">Observação</label>
        </div>
      </div>
      <input type="hidden" name="id" id="id" value="<?php echo $dados['idFicha']; ?>">
      <button type="submit" class="btn" name="btn-editar"><i class="material-icons">create</i></button>
    </form>
  </div>
  <div class="row">
    <div class="col s12 m10 push-m1">
      <h4 class="light">Grupos</h4>
      <table class="striped">
        <thead>
          <tr>
            <th>Descrição</th>
          </tr>
        </thead>
        <tbody>
          <?php

          $sql = "SELECT * FROM grupo INNER JOIN relFichaGrupo ON relFichaGrupo.idGrupo = grupo.idGrupo WHERE idFicha = '$id'";
          $resultado = mysqli_query($connect, $sql);

          while($dados = mysqli_fetch_array($resultado)):

            ?>
            <tr>
              <th><?php echo $dados['descricao']; ?></th>
              <th><a href="model/aluno.php?id=<?php echo $dados['idAluno']; ?>" class="btn-floating btn-small red"><i class="material-icons">delete</i></a></th>
            </tr>
            <?php

          endwhile;

          ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="row">
    <form action="../model/ficha-grupo.php" method="post" class="col s12 m10 push-m1">
      <div class="row">
        <div class="input-field col s6 m3 push-m3">
          <input type="hidden" id="idFicha" name="idFicha" value="<?php echo $id; ?>">
          <select name="idGrupo" id="idGrupo">
            <option value="" disabled selected>Selecione o grupo</option>
            <?php

              $sql = "SELECT * FROM grupo";
              $resultado = mysqli_query($connect, $sql);

              while($dados = mysqli_fetch_array($resultado)):

            ?>
            <option value="<?php echo $dados['idGrupo']; ?>">
              <?php echo $dados['descricao']; ?>
            </option>
            <?php

              endwhile;

            ?>
          </select>
          <label for="idGrupo">Grupo</label>
        </div>
        <div class="input-field col s6 m3 push-m3">
          <button type="submit" class="btn" name="btn-criar"><i class="material-icons">library_add</i></button>
        </div>
      </div>
    </form>
  </div>
<?php include_once '../inc/footer.php'; ?>
