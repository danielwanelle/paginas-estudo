<?php

include_once '../php_action/db_connect.php';
include_once '../inc/msg.php';
include_once '../inc/header.php';
include_once 'inc/bl.php';

//verifica se há id na urldecode
if(isset($_GET['id'])):
  $id = mysqli_escape_string($connect, $_GET['id']);

  $sql = "SELECT * FROM Aluno WHERE idAluno = '$id'";
  $resutado = mysqli_query($connect, $sql);
  $dados = mysqli_fetch_array($resutado);
endif;

?>

<script type="text/javascript" src="../js/init-form.js"></script>

  <div class="row">
    <form action="../model/aluno.php" method="post" class="col s12 m10 push-m1">
      <h3 class="light">Editar Aluno</h3>
      <div class="row">
        <div class="input-field col s12 m6 push-m3">
          <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>"/>
          <label for="nome">Nome</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6 push-m3">
          <input type="text" name="email" id="email" value="<?php echo $dados['email']; ?>"/>
          <label for="email">E-mail</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6 push-m3">
          <input type="text" name="cpf" id="cpf" value="<?php echo $dados['cpf']; ?>"/>
          <label for="cpf">CPF</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6 push-m3">
          <input type="text" name="peso" id="peso" value="<?php echo $dados['peso']; ?>"/>
          <label for="peso">Peso</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6 push-m3">
          <input type="text" name="altura" id="altura" value="<?php echo $dados['altura']; ?>"/>
          <label for="altura">Altura</label>
        </div>
      </div>
      <input type="hidden" name="id" id="id" value="<?php echo $dados['idAluno']; ?>">

      <div class="row">
        <div class="input-field col s6 m3 push-m3">
          <select name="idFicha" id="idFicha">

            <?php

              $sql = "SELECT * FROM ficha";
              $resultado = mysqli_query($connect, $sql);

              $idFicha = $dados['idFicha'];

              while($dados = mysqli_fetch_array($resultado)):

            ?>
            <option value="<?php echo $dados['idFicha']; ?>" <?php if(!strcmp($idFicha, $dados['idFicha'])): echo "selected"; endif; ?>>
              <?php echo $dados['descricao']; ?>
            </option>
            <?php

              endwhile;

            ?>
          </select>
          <label for="idTreino">Ficha</label>
        </div>
      </div>

      <button type="submit" class="btn" name="btn-editar"><i class="material-icons">create</i></button>
    </form>
  </div>


<?php include_once '../inc/footer.php'; ?>
